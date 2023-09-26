<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Terms;
use Illuminate\Http\Request;

class TermsController extends Controller
{


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        Terms::create($request->only('title'));

        return redirect()->route('dashboard',['segment' => 'term-of-use']);

    }

    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
    ]);

    $terms = Terms::find($id);

    if (!$terms) {
        return redirect()->route('dashboard', ['segment' => 'term-of-use'])->with('error', 'Terms not found');
    }

    $terms->update([
        'title' => $request->input('title'),
    ]);

    return redirect()->route('dashboard', ['segment' => 'term-of-use'])->with('success', 'Terms updated successfully');
}


    public function destroy($id)
    {
        $terms = Terms::find($id);

        if (!$terms) {
            return redirect()->route('dashboard',  ['segment' => 'term-of-use'])->with('error', 'Term not found');
        }

        $terms->delete();

        return redirect()->route('dashboard',  ['segment' => 'term-of-use'])->with('msg', 'Term deleted successfully');
    }
}
