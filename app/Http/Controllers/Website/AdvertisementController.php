<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Section;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function create($id){
        $sections = Section::all();
        $section_id = Section::findOrFail($id);

        return view('website.advertisements.create',compact('sections','section_id'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required',
            'location' => 'required',
            'phone' => 'required',
            'user_id' =>'required',
            'section_id' =>'required',

        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/advertisements'), $img_name);

      $product =   Product::create([
            'title' => $request->title,
            'description' =>  $request->description,
            'image' => $img_name,
            'location' => $request->location,
            'price' => $request->price,
            'phone' =>$request->phone,
            'user_id' => $request->user_id,
            'section_id' =>$request->section_id,

        ]);
        $productId = $product->id;


        Notification::create([
            'title' => 'تما اضافة المنتج بنجاح',
            'user_id' => auth()->user()->id,
            'link' => route('advertisement.show', ['id' => $productId]),
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





    public function productSections($id)
    {
        $sections = Section::all();
          $products = Product::where('section_id' ,$id)->orderByDesc('id')->get();

          return view('website.advertisements.advers_sections',compact('products','sections'));

    }
}
