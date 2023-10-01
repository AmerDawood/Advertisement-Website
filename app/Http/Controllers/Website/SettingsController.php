<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function useForUse()
    {
        $sections = Section::all();

        return view('website.settings.use_for_use.index',compact('sections'));
    }
}
