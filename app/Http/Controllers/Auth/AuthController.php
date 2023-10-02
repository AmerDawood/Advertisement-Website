<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationRequest;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function registerForm()
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

    public function profile()
    {
        return view('auth.profile');
    }

    public function register(RegistrationRequest $request)
{

  $user=   User::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'phone_number' => $request->phone_number,
        'country' => $request->country,
    ]);


    Notification::create([
        'title' => 'تم تسجيل بنجاح ',
        'user_id' => $user->id,
        'link' => route('profile'),
    ]);

    return redirect()->route('login')->with('success', 'Registration successful! You can now log in.');
}


public function login(Request $request)
{
    $credentials = [
        'phone_number' => $request->input('phone_number'),
        'password' => $request->input('password'),
    ];

    if (Auth::attempt($credentials)) {
        // Authentication passed

        // Check the user's role and redirect accordingly
        if (auth()->user()->type === 'admin') {
            return redirect()->route('dashboard',['segment' => 'sections']);
        } else {
            return redirect()->route('home');
        }
    }


    // Authentication failed
    return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
}

public function logout()
{
    Auth::logout(); // This will log the user out

    return redirect()->route('home'); // Redirect to the login page or any other desired location
}

}
