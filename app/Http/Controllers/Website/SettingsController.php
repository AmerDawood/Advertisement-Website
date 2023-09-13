<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function useForUse()
    {
        return view('website.settings.use_for_use.index');
    }
}
