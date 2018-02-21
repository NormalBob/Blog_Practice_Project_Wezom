<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }
    
    public function store()
    {
        // Validate the form
        $this->validate(request(),[
            'uname' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        
        // Create and save the user
        $user = User::create([ 
            'name' => request('uname'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'avatar' => 'users/default.png'
        ]);
        
        // Sign them in
        auth() -> login($user);
        
        \Mail::to($user->email)->send(new Welcome);
        
        // Redirect to home page
        return redirect('/');
    }
}
