<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;

class QuizController extends Controller
{
    // Affiche le détail d'un quiz
    public function quiz(int $id)
    {
        $quiz = Quizzes::findOrFail($id);

        return view("quiz", [
            "quiz" => $quiz,
        ]);
    }



}