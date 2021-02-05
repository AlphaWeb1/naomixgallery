<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function admin()
    {
        return view('auth.admin');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        // dd($credentials);

        if (!$this->verifyUserType($request)) {
            Auth::logout();
            $invalid_user = "Invalid login credential!";
            // $return_page = $request->page == 'admin' ? '/admin' : '/login';
            $return_page = $request->page == '/login';
            $request->session()->flash('invalid_user', $invalid_user);
            return redirect($return_page);
            // return view($request->page == 'admin' ? 'auth.admin' : 'auth.signin');
            // Its false, flag invalid user detail message
        }

        if (Auth::attempt($credentials)) {
            $user_data = Auth::user();
            // ActivityLogger::log($user_data, "$user_data->firstname ($user_data->email) logged in.", "user-login", "/root/user/$user_data->email");
            /*// Authentication passed...
            return redirect()->intended('dashboard');*/

            if (!empty($request->remember) && Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
                // The user is being remembered...
            }
            
            // $user_info = User::where("email", $request->email)->get()->first();
            // ActivityLogger::log($user_info, "$user_info->firstname ($user_info->email) logged in.", "user-login", "/root/user/$user_info->email");
            
            if (property_exists($user_data, 'user_type') && $user_data->user_type) {
                return redirect()->intended(RouteServiceProvider::ADMIN);
            } elseif (property_exists($user_data, 'user_type') && $user_data->user_type == 0) {
                return redirect()->intended(RouteServiceProvider::HOME);
            }
        }
    }
    
    protected function verifyUserType($request)
    {
        $userdetail = Auth::user();
        
        // $user_type = $request->page == 'admin' ? 1 : 0;
        $user_type = $userdetail->user_type;
        return (isset($userdetail->user_type) && $user_type == $userdetail->user_type  ? true : false);
    }
}
