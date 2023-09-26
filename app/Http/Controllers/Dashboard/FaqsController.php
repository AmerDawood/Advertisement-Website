<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);

        Faqs::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('dashboard', ['segment' => 'common-questions'])
            ->with('msg', 'Common questions question submitted successfully');
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:255',
    ]);

    $faqs = Faqs::find($id);

    if (!$faqs) {
        return redirect()->route('dashboard', ['segment' => 'common-questions'])->with('error', 'Common questions  not found');
    }

    $faqs->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
    ]);

    return redirect()->route('dashboard',  ['segment' => 'common-questions'])->with('success', 'Common questions updated successfully');
}


    public function destroy($id)
    {
        $faqs = Faqs::find($id);

        if (!$faqs) {
            return redirect()->route('dashboard', ['segment' => 'common-questions'])->with('error', 'Common questions Question not found');
        }

        $faqs->delete();

        return redirect()->route('dashboard',  ['segment' => 'common-questions'])->with('msg', 'Common questions  deleted successfully');
    }
}
