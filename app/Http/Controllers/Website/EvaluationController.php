<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        return view('website.evaluation.index',compact('sections'));
    }
}
