<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function create(){
        $sections = Section::all();
        return view('website.advertisements.create',compact('sections'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'user_id' =>'required'

        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/advertisements'), $img_name);

        Product::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'image' => $img_name,
            'location' => $request->location,
            'price' => $request->price,
            'phone' =>$request->phone,
            'user_id' => $request->user_id,

        ]);

        return redirect()->route('home')->with('msg', 'Advertisement Created Successfully')->with('type', 'success');


    }

    public function addDetails(){
        $sections = Section::all();
        return view('website.advertisements.add_details',
    compact('sections')
    );
    }


    public function show($id){
        $product = Product::findOrFail($id);
        $products = Product::latest()->take(6)->get();

        $sections = Section::all();



        return view('website.advertisements.show',
     [
        'sections' =>$sections,
        'product' =>$product,
        'products' =>$products,
     ]
    );
    }


    public function selectCategory(){
        $sections = Section::all();
        return view('website.advertisements.select_category',compact('sections'));

    }

    public function addPrivacy ()
    {
        $sections = Section::all();

        return view('website.advertisements.add_privacy',compact('sections'));
    }

    public function best_advers ()
    {
        $sections = Section::all();

        return view('website.advertisements.best_advers',compact('sections'));
    }
}
