<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailNotifications;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
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
            'contact_phone' => ['required', 'string', 'max:11', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'contact_title' => ['required', 'string', 'max:20'],
            'contact_message' => ['required', 'string', 'max:255']
        ]);

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
                "path" => config('app.url').config('app.port')."/".config('app.public_var').'assets/images/logos/logo-small-01.png'
            ), 
            "message" => (object) array(
                "title" => $request->contact_title, 
                "paragraphs" => array (
                    "Sender: $request->contact_name<br/><br/>Phone No: $request->contact_phone<br/><br/>", 
                    nl2br($request->contact_message)
                ), 
                "footer" => 'Copyright &copy; '.config('app.name').' '.date('Y')
            )
        );

        Mail::to($mail_data->send_to)->send(new EmailNotifications($mail_data));

        return back()->with("success_message", "Thanks for reaching out!!! Your message will be reviewed shortly");
    }
}
