<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Section;
use App\Models\Slider;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        $products = Product::orderByDesc('id')->get();

        $sliders = Slider::all();


        $sections = Section::all();
        return view('website.index',compact('products','sections','sliders'));
    }
}
