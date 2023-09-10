<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function create(){
        return view('website.advertisements.create');
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
}
