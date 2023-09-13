<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function choose()
    {
        return view('dashboard.choose');
    }

    public function home($segment)
    {




        return view('dashboard.home');
        // if ($segment === 'section') {

        //     return view('home');
        // } elseif ($segment === 'dashboard') {
        //     return view('dashboard');
        // } else {
        //     // Handle other cases or return an error view.
        //     return view('error');
        // }
    }

}
