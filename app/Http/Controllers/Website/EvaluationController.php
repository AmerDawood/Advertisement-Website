<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        return view('website.evaluation.index');
    }
}
