<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionsController extends Controller
{



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Section::create($request->only('title'));

        return redirect()->route('dashboard',['segment' => 'sections']);

    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $section = Section::find($id);

    if (!$section) {
        return redirect()->route('dashboard', ['segment' => 'sections'])->with('error', 'Section not found');
    }

    $section->update([
        'title' => $request->input('title'),
    ]);

    return redirect()->route('dashboard', ['segment' => 'sections'])->with('success', 'Section updated successfully');
}


    public function destroy($id)
    {
        $section = Section::find($id);

        if (!$section) {
            return redirect()->route('dashboard', ['segment' => 'sections'])->with('error', 'Section not found');
        }

        $section->delete();

        return redirect()->route('dashboard', ['segment' => 'sections'])->with('msg', 'Section deleted successfully');
    }

}
