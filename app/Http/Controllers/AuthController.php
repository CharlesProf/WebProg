<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showSignInPage(){
        return view('Pages.signin');
    }

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request-> password
        ];

        $remember = $request->remember;

        if(Auth::attempt($credentials)){
            if($remember){
                Cookie::queue($request->email, $request->email, 2);
            }

            Session::put('loginsession', $credentials);

            return redirect('/home');
        }

        return Redirect::back()->withErrors(['message' => 'Email or password is incorrect']);
    }

    public function showAdminPage(){
        return view('admin');
    }

    public function showSignUpPage(){
        return view('signup');
    }

    public function logout(){
        Auth::logout();
        Session::forget('loginsession');
        return redirect('/');
    }

}
