<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function settings()
    {
        $sections = Section::all();

        return view('website.notifications.settings',compact('sections'));
    }


    public function index()
    {
        $sections = Section::all();
        return view('website.notifications.index',compact('sections'));
    }
}
