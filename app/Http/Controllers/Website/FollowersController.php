<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Follower;
use App\Models\Notification;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use Illuminate\Http\Request;

class FollowersController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        return view('website.followers.index',compact('sections'));
    }


    public function user_profile($id)
    {
        $sections = Section::all();
        $user = User::findOrFail($id);


        $products = Product::where('user_id',$id)->take(5)->get();

        return view('auth.user_profile',compact('user','sections','products'));
    }





    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'follower_id' => 'required',
        ]);

        $user_id = $request->user_id;
        $follower_id = $request->follower_id;

        // Check if the favorite already exists
        $existingFavorite = Follower::where('user_id', $user_id)
            ->where('follower_id', $follower_id)
            ->first();

        if (!$existingFavorite) {
            // Create the favorite only if it doesn't already exist
            Follower::create([
                'user_id' => $user_id,
                'follower_id' => $follower_id,
            ]);

            Notification::create([
                'title' => 'لقد قمت بمتابعة شخص ما',
                'user_id' => auth()->user()->id,
                'link' => route('home')
            ]);

            return redirect()->back()->with('msg', 'Success');
        } else {
            return redirect()->back()->with('msg', 'Faild');
        }
    }


}
