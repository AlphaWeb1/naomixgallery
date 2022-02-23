<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\ImageManager;
use App\Services\FileManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'admin.auth', 'verified']);
    }

    public function index()
    {
        $products = Product::latest()->paginate(10);
        foreach ($products as $product) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        }
        $categories = DB::select(DB::raw("SELECT DISTINCT category FROM products;"));
        // dd($categories);
        return view('root.store.index', compact("products", "categories"));
    }
    
    public function store(Request $request)
    {
        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'category' =>  'min:1',
            'amount' =>  'numeric|min:0',
            'size' => 'min:0',
            'file' =>  'required|validate_file|validate_file_image',
        ]);

        $media_type = FileManager::getMediaType($request->file('file'));

        $saved_file = Product::create([
            "title" => $request->title,
            "description" => $request->description, 
            "amount" => $request->amount,
            "category" => $request->category, 
            "size" => $request->size,
            "media_type" => $media_type,
            "path" => "",
            "user_id" => auth()->user()->id
        ]);
        
        $path = "";
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            if (ImageManager::isImage($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/store", "product_$saved_file->id.png");
                ImageManager::reduceFile($path, $path);
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $path = $request->file('file')->storeAs( "media/store", "product_$saved_file->id.mp4");
                ImageManager::reduceFile($path, $path);
            }
        }

        Product::where("id", $saved_file->id)->update([ "path" => $path ]);
        return back()->with("success_message", "product successfully added to store");
    }
    
    public function show(Product $product, $id)
    {
        $product = $product->where("id", $id)->get()->first();
        if (!empty($product)) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        } else {
            return back()->with("error_message", "unable to find select product");
        }

        $categories = DB::select(DB::raw("SELECT DISTINCT category FROM products;"));

        return view('root.store.product', compact("product", "categories"));
    }
    
    public function update(Request $request, Product $product, $id)
    {
        $product = $product->where("id", $id)->get()->first();
        if (!empty($product)) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        } else {
            return back()->with("error_message", "unable to find select media");
        }

        $validated = request()->validate([
            'title' => 'required|string|min:1',
            'description' =>  'min:0',
            'category' =>  'min:1',
            'amount' =>  'numeric|min:0',
            'size' => 'min:0',
        ]);
        
        if ( !empty($request->file('file')) && is_file($request->file('file')) ) {
            FileManager::deleteFile($product->path);
            if (ImageManager::isImage($request->file('file'))) {
                $product->path = $request->file('file')->storeAs( "media/store", "product_$product->id.png");
                ImageManager::reduceFile($product->path, $product->path);

                $product->media_type = FileManager::getMediaType($request->file('file'));
            } elseif(ImageManager::isVideo($request->file('file'))) {
                $product->path = $request->file('file')->storeAs( "media/store", "product_$product->id.mp4");
                ImageManager::reduceFile($product->path, $product->path);

                $product->media_type = FileManager::getMediaType($request->file('file'));
            }
        }

        Product::where("id", $product->id)->update([ 
            "title" => $request->title,
            "description" => $request->description, 
            "amount" => $request->amount,
            "category" => $request->category, 
            "size" => $request->size,
            "media_type" => $product->media_type,
            "path" => $product->path 
        ]);
        return back()->with("success_message", "product detail successfully updated");
    }

    public function destroy(Product $product)
    {
        //
    }

    public function destroy1(Product $product, $id)
    {
        $product = $product->where("id", $id)->get()->first();
        if (empty($product)) {
            return back()->with("error_message", "unable to find select image in product");
        }
        
        FileManager::deleteFile($product->path);
        Product::destroy($id);

        return redirect('root/store')->with("success_message", "product {$product->title} was successfully deleted");
    }
}
