<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use App\Models\Section;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function index (){
        $faqs = Faqs::all();
        $sections = Section::all();
        return view('website.faqs.index',
      [
        'faqs' =>$faqs,
        'sections'=>$sections,
      ]
    );
    }



}
