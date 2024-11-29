<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Language;
use App\Models\Poll;
use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('poll')) {
            $poll = Poll::findOrFail($request->poll);
        } else {
            $poll = Poll::inRandomOrder()->first();
        }

        $poll->load(
            'question.translations',
            'options.translations',
        );

        $poll->load(['options' => function ($query) {
            $query->withCount('votes');
        }]);

        $language = Language::first();

        return view('user.play.show', compact('poll', 'language'));
    }
}