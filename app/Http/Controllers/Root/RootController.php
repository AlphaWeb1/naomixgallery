<?php

namespace App\Http\Controllers\Root;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class RootController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['auth', 'admin.auth', 'verified']);
    }

    public function index()
    {
        return view('root.home');
    }
    
    public function create()
    {
        //
    }
    
    public function store(Request $request)
    {
        //
    }
    
    public function show(User $user)
    {
        //
    }
    
    public function edit(User $user)
    {
        //
    }
    
    public function update(Request $request, User $user)
    {
        //
    }
    
    public function destroy(User $user)
    {
        //
    }

    public function logout(Request $request)
    {
        $user = auth()->user();
        // ActivityLogger::log($user, 
        // "$user->firstname ($user->email) logged out.", 
        // "logout", "/root/user/$user->email");

        $sess = Session::flush();
        Auth::guard()->logout();

        $request->session()->flush();

        $request->session()->regenerate();
        return redirect('/admin');
    }
}
