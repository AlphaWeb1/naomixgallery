<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Models\Mural;
use App\Services\ImageManager;
use App\Services\FileManager;
use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin.auth', 'verified']);
    }

    public function index(Request $request)
    {
        $murals = Mural::latest()->paginate(10);
        foreach ($murals as $mural) {
            $mural->description_decode = htmlspecialchars_decode($mural->description);
        }
        return view('root.mural.index', compact("murals"));
    }

    public function store(Request $request)
    {
        // dd($request->file('file'));
        // dd(ImageManager::validateMime($request->file('file')));
        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'company' => 'min:0',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'size' => 'min:0',
            'file' =>  'required|validate_file|validate_file_image',
        ]);

        $media_type = FileManager::getMediaType($request->file('file'));

        $saved_file = Mural::create([
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "company" => $request->company, 
            "size" => $request->size,
            "media_type" => $media_type,
            "path" => "",
            "user_id" => auth()->user()->id
        ]);
        
        $path = "";
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            if (ImageManager::isImage($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/mural", "mural_$saved_file->id.png");
                ImageManager::reduceFile($path, $path);
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/mural", "mural_$saved_file->id.mp4");
                ImageManager::reduceFile($path, $path);
            }
        }

        Mural::where("id", $saved_file->id)->update([ "path" => $path ]);
        return back()->with("success_message", "new mural successfully added");
    }

    public function show(Mural $mural, $id)
    {
        $mural = $mural->where("id", $id)->get()->first();
        if (!empty($mural)) {
            $mural->description_decode = htmlspecialchars_decode($mural->description);
        } else {
            return back()->with("error_message", "unable to find select mural");
        }

        return view('root.mural.mural-single', compact("mural"));
    }
    

    public function update(Mural $mural, Request $request, $id)
    {
        $mural = $mural->where("id", $id)->get()->first();
        if (!empty($mural)) {
            $mural->description_decode = htmlspecialchars_decode($mural->description);
        } else {
            return back()->with("error_message", "unable to find select media");
        }

        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'company' => 'min:0',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'size' => 'min:0',
            'file' =>  'validate_file_image',
        ]);
        
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            FileManager::deleteFile($mural->path);
            if (ImageManager::isImage($request->file('file'))) {
                $mural->path = $request->file('file')->storeAs( "media/mural", "mural_$mural->id.png");
                ImageManager::reduceFile($mural->path, $mural->path);

                $mural->media_type = FileManager::getMediaType($request->file('file'));
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $mural->path = $request->file('file')->storeAs( "media/mural", "mural_$mural->id.mp4");
                ImageManager::reduceFile($mural->path, $mural->path);

                $mural->media_type = FileManager::getMediaType($request->file('file'));
            }
        }

        Mural::where("id", $mural->id)->update([ 
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "company" => $request->company, 
            "size" => $request->size,
            "media_type" => $mural->media_type,
            "path" => $mural->path 
            ]);
        return back()->with("success_message", "mural detail successfully updated");
    }

    public function destroy1(Mural $mural, $id)
    {
        $mural = $mural->where("id", $id)->get()->first();
        if (empty($mural)) {
            return back()->with("error_message", "unable to find select image in gallery");
        }
        
        FileManager::deleteFile($mural->path);
        Mural::destroy($id);

        return redirect('root/murals')->with("success_message", "{$mural->title} {$mural->year} {$mural->media_type} file was successfully deleted");
    }

}
