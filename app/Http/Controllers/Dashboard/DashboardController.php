<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Faqs;
use App\Models\PrivacyQuestion;
use App\Models\Section;
use App\Models\SuggestedQuestion;
use App\Models\Terms;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function choose()
    {
        return view('dashboard.choose');
    }

    public function home($segment)
    {
        $sections = Section::all();
        $terms = Terms::all();
        $suggeestQuestions = SuggestedQuestion::all();
        $users = User::all();
        $areas = Area::all();
        $faqs = Faqs::all();
        $privacy = PrivacyQuestion::all();
        // dd($privacy);


        return view('dashboard.home',compact('sections','terms','suggeestQuestions','users','areas','faqs','privacy'));

    }
}
