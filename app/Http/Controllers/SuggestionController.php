<?php

namespace App\Http\Controllers;

use App\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
{

    public function suggestions()
    {
        $suggestions = Suggestion::get();

        return view('admin.service.suggestionspage', compact('suggestions'));
    }

}
