<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Services\ImageManager;
use App\Services\FileManager;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin.auth', 'verified']);
    }

    public function index(Request $request)
    {
        $type = $request->type ?? '';
        if (in_array($type, array('abstract', 'miniature', 'portrait', 'collection'))) {
            $galleries = Gallery::whereRaw("category = '{$type}'")->latest()->paginate(10);
        } else {
            $type = '';
            $galleries = Gallery::latest()->paginate(10);
        }
        return view('root.gallery.index', compact("galleries", "type"));
    }

    public function store(Request $request)
    {
        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'medium' =>  'min:0',
            'size' => 'min:0',
            'file' =>  'required|validate_file|validate_file_image',
            'category' =>  'required|gallery_category'
            //'file.*' => 'mimes:doc,pdf,docx,txt,zip,jpeg,jpg,png'
        ]);

        $media_type = FileManager::getMediaType($request->file('file'));
        // dd($media_type);

        $saved_file = Gallery::create([
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "category" => $request->category, 
            "size" => $request->size,
            "medium" => $request->medium,
            "media_type" => $media_type,
            "path" => "",
            "user_id" => auth()->user()->id
        ]);
        
        $path = "";
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            if (ImageManager::isImage($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/gallery", "gallery_$saved_file->id.png");
                ImageManager::reduceFile($path, $path);
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/gallery", "gallery_$saved_file->id.mp4");
                ImageManager::reduceFile($path, $path);
            }
        }

        Gallery::where("id", $saved_file->id)->update([ "path" => $path ]);
        return back()->with("success_message", "gallery file successfully added");
    }

    public function show(Gallery $gallery, $id)
    {
        $gallery = $gallery->where("id", $id)->get()->first();
        if (!empty($gallery)) {
            $gallery->description_decode = htmlspecialchars_decode($gallery->description);
        } else {
            return back()->with("error_message", "unable to find select media");
        }

        return view('root.gallery.gallery-single', compact("gallery"));
    }

    public function update(Gallery $gallery, Request $request, $id)
    {
        $gallery = $gallery->where("id", $id)->get()->first();
        if (!empty($gallery)) {
            $gallery->description_decode = htmlspecialchars_decode($gallery->description);
        } else {
            return back()->with("error_message", "unable to find select media");
        }

        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'year' => 'required|min:1',
            'medium' =>  'min:0',
            'size' => 'min:0',
            'file' =>  'validate_file_image',
            'category' =>  'required|gallery_category'
        ]);
        
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            FileManager::deleteFile($gallery->path);
            if (ImageManager::isImage($request->file('file'))) {
                $gallery->path = $request->file('file')->storeAs( "media/gallery", "gallery_$gallery->id.png");
                ImageManager::reduceFile($gallery->path, $gallery->path);

                $gallery->media_type = FileManager::getMediaType($request->file('file'));
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $gallery->path = $request->file('file')->storeAs( "media/gallery", "gallery_$gallery->id.mp4");
                ImageManager::reduceFile($gallery->path, $gallery->path);

                $gallery->media_type = FileManager::getMediaType($request->file('file'));
            }
        }

        Gallery::where("id", $gallery->id)->update([ 
            "title" => $request->title,
            "description" => $request->description, 
            "year" => $request->year,
            "category" => $request->category, 
            "size" => $request->size,
            "medium" => $request->medium,
            "media_type" => $gallery->media_type,
            "path" => $gallery->path 
            ]);
        return back()->with("success_message", "gallery file successfully updated");
    }

}
