<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Models\Exhibition;
use App\Models\ExhibitionItem;
use App\Services\ImageManager;
use App\Services\FileManager;
use Illuminate\Http\Request;

class ExhibitionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin.auth', 'verified']);
    }

    public function index()
    {
        $exhibitions = Exhibition::latest()->paginate(10);
        if (!empty($exhibitions)) {
            foreach ($exhibitions as $exhibition) {
                $exhibition->exhibition_items = ExhibitionItem::where("exhibition_id", $exhibition->id)->count();
            }
        }
        return view('root.exhibition.index', compact("exhibitions"));
    }
    
    public function store(Request $request)
    {
        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'location' =>  'min:0'
        ]);
        
        $saved_file = Exhibition::create([
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "location" => $request->location,
            "user_id" => auth()->user()->id
        ]);
        return back()->with("success_message", "new exhibition successfully created");
    }
    
    public function store1(Request $request, $id)
    {
        $exhibition = Exhibition::where("id", $id)->get()->first();
        if (empty($exhibition)) {
            return back()->with("error_message", "unable to find select exhibition");
        }

        $validated = request()->validate([
            'title' => 'min:0',
            'medium' =>  'min:0',
            'size' => 'min:0',
            'file' =>  'required|validate_file|validate_file_image',
        ]);

        $media_type = FileManager::getMediaType($request->file('file'));

        $saved_file = ExhibitionItem::create([
            "title" => $request->title,
            "description" => '', 
            "exhibition_id" => $exhibition->id, 
            "size" => $request->size,
            "medium" => $request->medium,
            "media_type" => $media_type,
            "path" => "",
            "user_id" => auth()->user()->id
        ]);
        
        $path = "";
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            if (ImageManager::isImage($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/exhibition/$id", "exhibition_$saved_file->id.png");
                ImageManager::reduceFile($path, $path);
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/exhibition/$id", "exhibition_$saved_file->id.mp4");
                ImageManager::reduceFile($path, $path);
            }
        }

        ExhibitionItem::where("id", $saved_file->id)->update([ "path" => $path ]);
        return back()->with("success_message", $media_type." file successfully added to exhibition");
    }

    public function show(Exhibition $exhibition, $id)
    {
        $exhibition = $exhibition->where("id", $id)->get()->first();
        if (!empty($exhibition)) {
            $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);
        } else {
            return back()->with("error_message", "unable to find select exhibition");
        }
        
        $exhibition->exhibition_items = ExhibitionItem::where("exhibition_id", $exhibition->id)->latest()->paginate(20);

        return view('root.exhibition.exhibition-single', compact("exhibition"));
    }

    public function show1(Exhibition $exhibition, ExhibitionItem $exhibition_item, $id, $item)
    {
        $exhibition = $exhibition->where("id", $id)->get()->first();
        if (!empty($exhibition)) {
            $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);
        } else {
            return back()->with("error_message", "unable to find select exhibition");
        }
        $exhibition_item = $exhibition_item->whereRaw("id = '{$item}' AND exhibition_id = '{$id}'")->get()->first();
        if (empty($exhibition_item)) {
            return back()->with("error_message", "unable to find select image");
        }

        return view('root.exhibition.show-image-single', compact("exhibition", "exhibition_item"));
    }
    
    public function update(Request $request, Exhibition $exhibition, $id)
    {
        $exhibition = $exhibition->where("id", $id)->get()->first();
        if (empty($exhibition)) {
            return back()->with("error_message", "unable to find select exhibition");
        }

        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'location' =>  'min:0'
        ]);
        
        Exhibition::where("id", $id)->update([
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "location" => $request->location,
            "user_id" => auth()->user()->id
        ]);
        return back()->with("success_message", "exhibition detail successfully update");
    }

    public function update1(Request $request, Exhibition $exhibition, ExhibitionItem $exhibition_item, $id, $item)
    {
        $exhibition = $exhibition->where("id", $id)->get()->first();
        if (empty($exhibition)) {
            return back()->with("error_message", "unable to find select exhibition");
        }
        $exhibition_item = $exhibition_item->whereRaw("id = '{$item}' AND exhibition_id = '{$id}'")->get()->first();
        if (empty($exhibition_item)) {
            return back()->with("error_message", "unable to find select image");
        }

        $validated = request()->validate([
            'title' => 'min:0',
            'medium' =>  'min:0',
            'size' => 'min:0',
            'file' =>  'validate_file_image',
        ]);
        
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            FileManager::deleteFile($exhibition_item->path);
            if (ImageManager::isImage($request->file('file'))) {
                $exhibition_item->path = $request->file('file')->storeAs( "media/exhibition/$id", "exhibition_$exhibition_item->id.png");
                ImageManager::reduceFile($exhibition_item->path, $exhibition_item->path);

                $exhibition_item->media_type = FileManager::getMediaType($request->file('file'));
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $exhibition_item->path = $request->file('file')->storeAs( "media/exhibition/$id", "exhibition_$exhibition_item->id.mp4");
                ImageManager::reduceFile($exhibition_item->path, $exhibition_item->path);

                $exhibition_item->media_type = FileManager::getMediaType($request->file('file'));
            }
        }

        ExhibitionItem::where("id", $exhibition_item->id)->update([ 
            "title" => $request->title,
            "size" => $request->size,
            "medium" => $request->medium,
            "media_type" => $exhibition_item->media_type,
            "path" => $exhibition_item->path 
            ]);
        return back()->with("success_message", $exhibition_item->media_type." file successfully updated");

    }
    
    public function destroy(Exhibition $exhibition)
    {
        //
    }
}
