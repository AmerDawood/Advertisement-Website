<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    public function forget()
    {
        return view('auth.forget');
    }

    public function addCode()
    {
        return view('auth.add_code');
    }

    public function newPassword()
    {
        return view('auth.new_password');
    }
}
