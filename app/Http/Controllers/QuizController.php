<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use App\Models\Levels;

//faire bien gaffe à utiliser celui-ci et pas un autre !!!
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class QuizController extends Controller
{
    // Affiche le détail d'un quiz
    public function quiz(int $id)
    {
        $quiz = Quizzes::findOrFail($id);

        return view("quiz", [
            "quiz" => $quiz,
            "id" => $id 
        ]);
    }

    public function level(int $levelId)
    {
        $level = Level::findOrFail($levelId);
    }
}