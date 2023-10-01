<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('website.favorite.index',compact('sections'));
    }
}
