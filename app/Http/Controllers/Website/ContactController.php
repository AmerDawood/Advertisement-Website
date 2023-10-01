<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        return view('website.contact.index',compact('sections'));
    }
}
