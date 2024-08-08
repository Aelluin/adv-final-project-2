<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use App\Mail\RegisterMail;
use Str;
use Auth;

class AuthController extends Controller
{
    public function login () {
        return view('auth.login');
    }

    public function register () {
        return view ('auth.register');
    }

    public function forgot () {
        return view ('auth.forgot');
    }


    public function auth_login(Request $request) {
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        {

            echo "successfully logged in";
            return redirect('/userview');
        }
        else
        {
            return redirect()->back()->with('error', 'Please enter correct email and password');
        }

    }

    public function create_user (Request $request) {

        request()->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' => 'required'
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(40);
        $save->save();




        return redirect('login')->with('success', "Your Account Is Registered Successfully!");
    }


}
