<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::orderByDesc('id')->get();

        return response()->json(['data' => $products], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file
            'location' => 'required',
            'phone' => 'required',
        ]);

        $img_name = rand() . time() . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/advertisements'), $img_name);

        $product = new Product([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $img_name,
            'location' => $request->location,
            'price' => $request->price,
            'phone' => $request->phone,
        ]);

        $product->save();

        return response()->json(['message' => 'Product created successfully'], 201);
    }
}
