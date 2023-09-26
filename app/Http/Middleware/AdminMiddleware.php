<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated and has the "admin" type
        // if (Auth::check() && Auth::user()->type === 'admin') {
        //     return $next($request);
        // }

        // // Redirect or respond with an error message for unauthorized users
        // return redirect()->route('home')->with('error', 'Unauthorized access.');
    }
}
