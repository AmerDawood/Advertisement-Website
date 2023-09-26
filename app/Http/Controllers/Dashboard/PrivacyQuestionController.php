<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\PrivacyQuestion;
use Illuminate\Http\Request;

class PrivacyQuestionController extends Controller
{

    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
        ]);

        PrivacyQuestion::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);

        return redirect()->route('dashboard', ['segment' => 'security-questions'])
            ->with('msg', 'Privacy questions submitted successfully');
    }


    public function update(Request $request, $id)
{
    $request->validate([
        'question' => 'required|string|max:255',
        'answer' => 'required|string|max:255',
    ]);

    $privacy = PrivacyQuestion::find($id);

    if (!$privacy) {
        return redirect()->route('dashboard', ['segment' => 'security-questions'])->with('error', 'Privacy questions  not found');
    }

    $privacy->update([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
    ]);

    return redirect()->route('dashboard',  ['segment' => 'security-questions'])->with('success', 'Privacy questions updated successfully');
}


    public function destroy($id)
    {
        $privacy = PrivacyQuestion::find($id);

        if (!$privacy) {
            return redirect()->route('dashboard', ['segment' => 'security-questions'])->with('error', 'Privacy questions Question not found');
        }

        $privacy->delete();

        return redirect()->route('dashboard',  ['segment' => 'security-questions'])->with('msg', 'Privacy questions  deleted successfully');
    }
}
