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
    }
}
