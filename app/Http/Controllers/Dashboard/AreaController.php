<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Area::create($request->only('name'));

        return redirect()->route('dashboard',['segment' => 'areas']);

    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $area = Area::find($id);

    if (!$area) {
        return redirect()->route('dashboard', ['segment' => 'areas'])->with('error', 'Area not found');
    }

    $area->update([
        'name' => $request->input('title'),
    ]);

    return redirect()->route('dashboard', ['segment' => 'areas'])->with('success', 'Area updated successfully');
}


    public function destroy($id)
    {
        $area = Area::find($id);

        if (!$area) {
            return redirect()->route('dashboard', ['segment' => 'areas'])->with('error', 'Area not found');
        }

        $area->delete();

        return redirect()->route('dashboard', ['segment' => 'areas'])->with('msg', 'Area deleted successfully');
    }

}
