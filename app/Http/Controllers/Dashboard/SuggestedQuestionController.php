<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SuggestedQuestion;
use Illuminate\Http\Request;

class SuggestedQuestionController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);

        SuggestedQuestion::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('dashboard', ['segment' => 'suggested_questions'])
            ->with('msg', 'Suggested question submitted successfully');
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:255',
    ]);

    $suggest = SuggestedQuestion::find($id);

    if (!$suggest) {
        return redirect()->route('dashboard', ['segment' => 'suggested_questions'])->with('error', 'suggested questions not found');
    }

    $suggest->update([
        'question' => $request->input('question'),
            'answer' => $request->input('answer'),
    ]);

    return redirect()->route('dashboard',  ['segment' => 'suggested_questions'])->with('success', 'Terms updated successfully');
}


    public function destroy($id)
    {
        $suggest = SuggestedQuestion::find($id);

        if (!$suggest) {
            return redirect()->route('dashboard', ['segment' => 'suggested_questions'])->with('error', 'Suggested Question not found');
        }

        $suggest->delete();

        return redirect()->route('dashboard',  ['segment' => 'suggested_questions'])->with('msg', 'Suggested Question deleted successfully');
    }
}
