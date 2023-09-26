<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function create(){
        return view('website.advertisements.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'location' => 'required',
            'phone' => 'required',

        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/advertisements'), $img_name);

        Product::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'image' => $img_name,
            'location' => $request->location,
            'price' => $request->price,
            'phone' =>$request->phone

        ]);

        return redirect()->route('home')->with('msg', 'Advertisement Created Successfully')->with('type', 'success');


    }

    public function addDetails(){
        return view('website.advertisements.add_details');
    }


    public function show(){
        return view('website.advertisements.show');
    }


    public function selectCategory(){

        return view('website.advertisements.select_category');

    }

    public function addPrivacy ()
    {
        return view('website.advertisements.add_privacy');
    }

    public function best_advers ()
    {
        return view('website.advertisements.best_advers');
    }
}
