<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use App\Models\Notification;
use App\Models\Section;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        $favroites = Favorite::where('user_id', auth()->user()->id)
        ->get();
        return view('website.favorite.index',compact('sections','favroites'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'product_id' => 'required',
        ]);

        $user_id = $request->user_id;
        $product_id = $request->product_id;

        // Check if the favorite already exists
        $existingFavorite = Favorite::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if (!$existingFavorite) {
            // Create the favorite only if it doesn't already exist
            Favorite::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);

            Notification::create([
                'title' => 'تم اضافه المنتج الى المفضلة',
                'user_id' => auth()->user()->id,
                'link' => route('favorites.index')
            ]);

            return redirect()->back()->with('msg', 'Product Added To Favorites');
        } else {
            return redirect()->back()->with('msg', 'Product is already in Favorites');
        }
    }




public function delete(Request $request)
{
    $request->validate([
        'user_id' => 'required',
        'product_id' => 'required',
    ]);

    $user_id = $request->user_id;
    $product_id = $request->product_id;

    // Find and delete the favorite
    $favorite = Favorite::where('user_id', $user_id)
        ->where('product_id', $product_id)
        ->first();

    if ($favorite) {
        $favorite->delete();

        return redirect()->back()->with('msg', 'Product Removed from Favorites');
    } else {
        return redirect()->back()->with('msg', 'Product is not in Favorites');
    }
}


}
