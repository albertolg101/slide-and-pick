<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PollOption;

class VoteController extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'option' => 'required|exists:poll_options,id',
        ]);

        if ($request->query('defaultLanguage')) {
            $request->session()->put('defaultLanguage', $request->query('defaultLanguage'));
        }

        $option = PollOption::findOrFail($request->option);
        $option->votes()->create();

        return redirect()->route('play.index');
    }
}
