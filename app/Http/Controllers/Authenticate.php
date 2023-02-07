<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authenticate extends Controller
{
    //
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('signin');
        }
    }
}
