<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $sections = Section::all();
        $products = Product::where('user_id',auth()->user()->id)->get();
        return view('auth.profile2',compact('sections','products'));
    }
}
