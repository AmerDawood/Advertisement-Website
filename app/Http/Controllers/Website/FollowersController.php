<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        return view('website.followers.index',compact('sections'));
    }
}
