<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Models\QuizzesHasTags;
// use App\Models\;

//faire bien gaffe à utiliser celui-ci et pas un autre !!!
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function tags()
    {
        $tags = Tags::all();

        return view("tags", [
            "tags" => $tags
        ]);
    }

    public function quiz(int $id)
    {
        $tags = Tags::find($id);

        $quizzesHasTags = QuizzesHasTags::all();

        return view("quizByTag", [
            "id" => $id,
            "tags" => $tags,
            "quizzesHasTags" => $quizzesHasTags,
        ]);
    }
}