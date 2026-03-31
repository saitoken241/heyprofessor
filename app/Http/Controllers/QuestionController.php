<?php

namespace App\Http\Controllers;

use App\Models\{Question, User};
use App\Rules\EndWithQuestionMarkRule;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class QuestionController extends Controller
{
    public function index(): View
    {
        return view('question.index', [
            'question' => auth() -> user() -> questions,

        ]);
    }

    public function store(): RedirectResponse
    {

        request()->validate(
            [
                'question' => [
                    'required',
                    'min:10',
                    new EndWithQuestionMarkRule()
                    ,
                ],
            ]
        );

        user()->questions()->create([

            'question' => request()->question,
            'draft'    => true,
        ]);

        return to_route('dashboard');

    }

    public function update(Question $question): RedirectResponse
    {
        $this->authorize('update', $question);
        request()->validate(
            [
                'question' => [
                    'required',
                    'min:10',
                    new EndWithQuestionMarkRule()
                    ,
                ],
            ]
        );
        $question->question = request()->question;
        $question->save();

        return back();
    }

    public function edit(User $user, Question $question): \Illuminate\View\View
    {
        $this->authorize('update', $question);

        return view('question.edit', compact('question'));

    }

    public function destroy(Question $question): RedirectResponse
    {
        $this->authorize('destroy', $question);
        $question -> delete();

        return back();
    }
    //
}
