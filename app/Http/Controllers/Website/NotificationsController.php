<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function settings()
    {
        return view('website.notifications.settings');
    }


    public function index()
    {
        return view('website.notifications.index');
    }
}
