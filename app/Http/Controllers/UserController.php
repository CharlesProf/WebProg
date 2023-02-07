<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function addUser(Request $request){
        $request->validate([
            'first_name' => 'required|string|max:25',
            'last_name' => 'required|string|max:25',
            'email' => 'required|email',
            'role' => 'required|in:User,Admin',
            'gender' => 'required',
            'display_picture' => 'required|image',
            'password' => 'required|min:8|regex:/^(?=.*[0-9])/',
            'confirm_password' => 'required|same:password|min:8|regex:/^(?=.*[0-9])/',
        ]);

        $user = User::create([
            'username' => $username,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone,
            'address' => $address,
            'role' => "member"
        ]);

        auth()->login($user);

        return redirect('/home');
    }
}
