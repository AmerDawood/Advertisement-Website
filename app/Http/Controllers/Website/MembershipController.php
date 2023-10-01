<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class MembershipController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        return view('website.membership.index',compact('sections'));
    }
}
