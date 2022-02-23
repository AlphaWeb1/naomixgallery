<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailNotifications;
use App\Models\Gallery;
use App\Models\Mural;
use App\Models\Product;
use App\Models\Exhibition;
use App\Models\ExhibitionItem;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function index()
    {   
        $summary = (object) array("product" => 0);
        $summary->product = Product::count();
        $summary->gallery = Gallery::count();
        $summary->exhibition = Exhibition::count();
        $summary->mural = Mural::count();
        
        // $exhibitions = Exhibition::latest()->take(3)->get();
        // if (!empty($exhibitions)) {
        //     foreach ($exhibitions as $exhibition) {
        //         $exhibition->first_item = ExhibitionItem::where("exhibition_id", $exhibition->id)->latest()->first();
        //         $exhibition->images = ExhibitionItem::where("exhibition_id", $exhibition->id)->count();
        //         $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);
        //     }
        // }
        $exhibition = Exhibition::latest()->first();
        $exhibition->first_item = ExhibitionItem::where("exhibition_id", $exhibition->id)->latest()->first();
        $exhibition->images = ExhibitionItem::where("exhibition_id", $exhibition->id)->count();
        $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);

        // $murals = Mural::latest()->take(3)->get();
        // foreach ($murals as $mural) {
        //     $mural->description_decode = htmlspecialchars_decode($mural->description);
        // }
        $mural = Mural::latest()->first();
        $mural->description_decode = htmlspecialchars_decode($mural->description);

        // $galleries = (object) array("collection" => null);
        // $galleries->collection = Gallery::whereRaw("category = 'collection'")->latest()->first();
        // if (!empty($galleries->collection)) {
        //     $galleries->collection->description_decode = htmlspecialchars_decode($galleries->collection->description);
        // }

        // $galleries->portrait = Gallery::whereRaw("category = 'portrait'")->latest()->first();
        // if (!empty($galleries->portrait)) {
        //     $galleries->portrait->description_decode = htmlspecialchars_decode($galleries->portrait->description);
        // }

        // $galleries->miniature = Gallery::whereRaw("category = 'miniature'")->latest()->first();
        // if (!empty($galleries->miniature)) {
        //     $galleries->miniature->description_decode = htmlspecialchars_decode($galleries->miniature->description);
        // }

        // $galleries->abstract = Gallery::whereRaw("category = 'abstract'")->latest()->first();
        // if (!empty($galleries->abstract)) {
        //     $galleries->abstract->description_decode = htmlspecialchars_decode($galleries->abstract->description);
        // }
        $gallery =  Gallery::latest()->first();
        if (!empty($gallery)) {
            $gallery->description_decode = htmlspecialchars_decode($gallery->description);
        }

        $products = Product::latest()->take(3)->get();
        foreach ($products as $product) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        }

        return view('home', compact('summary', 'exhibition', 'mural', 'gallery', 'products'));
    }

    public function gallery($type = null)
    {
        if (in_array($type, array('abstract', 'miniature', 'portrait', 'collection'))) {
            $galleries = Gallery::whereRaw("category = '{$type}'")->latest()->paginate(10);
        } else {
            $type = '';
            $galleries = Gallery::latest()->paginate(10);
        }
        return view('gallery', compact("galleries", "type"));
    }

    public function gallery_detail(Gallery $gallery, $id)
    {
        $gallery = $gallery->where("id", $id)->get()->first();
        if (!empty($gallery)) {
            $gallery->description_decode = htmlspecialchars_decode($gallery->description);
        } else {
            return back()->with("error_message", "unable to find select media");
        }

        return view('gallery-single', compact("gallery"));
    }

    public function exhibition()
    {
        $exhibitions = Exhibition::latest()->paginate(10);
        if (!empty($exhibitions)) {
            foreach ($exhibitions as $exhibition) {
                $exhibition->first_item = ExhibitionItem::where("exhibition_id", $exhibition->id)->latest()->first();
                $exhibition->images = ExhibitionItem::where("exhibition_id", $exhibition->id)->count();
                $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);
            }
        }
        return view('exhibitions', compact("exhibitions"));
    }

    public function exhibition_detail(Exhibition $exhibition, $id)
    {
        $exhibition = $exhibition->where("id", $id)->get()->first();
        if (!empty($exhibition)) {
            $exhibition->description_decode = htmlspecialchars_decode($exhibition->description);
        } else {
            return back()->with("error_message", "unable to find select exhibition");
        }
        
        $exhibition->exhibition_items = ExhibitionItem::where("exhibition_id", $exhibition->id)->latest()->paginate(20);

        return view('exhibition-single', compact("exhibition"));
    }

    public function murals(Mural $mural)
    {
        $murals = $mural->latest()->paginate(10);
        foreach ($murals as $mural) {
            $mural->description_decode = htmlspecialchars_decode($mural->description);
        }
        return view('murals', compact("murals"));
    }

    public function store(Product $product)
    {
        return redirect('/home'); // to disable store
        $products = $product->latest()->paginate(10);
        foreach ($products as $product) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        }
        $categories = DB::select(DB::raw("SELECT DISTINCT category FROM products;"));
        // dd($categories);
        return view('store', compact("products", "categories"));
    }

    public function store_detail(Product $product, $id)
    {
        return redirect('/home'); // to disable store
        $product = $product->where("id", $id)->get()->first();
        if (!empty($product)) {
            $product->description_decode = htmlspecialchars_decode($product->description);
        } else {
            return back()->with("error_message", "unable to find select product");
        }

        return view('product', compact("product"));
    }
    
    public function about()
    {
        return view('about');
    }

    public function artist_profile()
    {
        return view('artist-profile');
    }

    public function contact()
    {
        return view('contact');
    }
    function contact_send(Request $request)
    {
        $validated = $request->validate([
            'contact_email' => ['required', 'string', 'email', 'max:255'],
            'contact_name' => ['required', 'string', 'min:2', 'max:255'],
            // 'contact_phone' => ['required', 'string', 'max:11', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'contact_title' => ['required', 'string', 'max:20'],
            'contact_message' => ['required', 'string', 'max:255']
        ]);

        // dd($request);

        $mail_data = (object) array(
            "send_from" => (object) array(
                "email" => $request->contact_email,
                "name" => $request->contact_name,
            ),
            "send_to" => (object) array(
                "email" => config('app.contact.email'),
                "name" => 'Contact | '.config('app.name'),
            ),
            "logo" => (object) array(
                "title" => 'Contact | '.config('app.name'),
                "path" => config('app.url').config('app.port')."/".config('app.public_prefix').'assets/images/logo/logo-colored-new.png'
            ), 
            "message" => (object) array(
                "title" => $request->contact_title, 
                "paragraphs" => array (
                    "Sender: $request->contact_name".(!empty($request->contact_phone) ? "<br/><br/>Phone No: $request->contact_phone" : "")."<br/><br/>", 
                    nl2br($request->contact_message)
                ), 
                "footer" => 'Copyright &copy; '.config('app.name').' '.date('Y')
            )
        );

        Mail::to($mail_data->send_to)->send(new EmailNotifications($mail_data));

        return back()->with("success_message", "Thanks for reaching out!!! Your message will be reviewed shortly");
    }
}
