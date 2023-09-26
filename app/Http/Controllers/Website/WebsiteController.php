<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        $products = Product::orderByDesc('id')->get();
        return view('website.index',compact('products'));
    }
}
