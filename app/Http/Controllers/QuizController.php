<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
use App\Models\Answers;

class QuizController extends Controller
{
    // Affiche le détail d'un quiz
    public function quiz(int $id)
    {
        $quiz = Quizzes::findOrFail($id);

        $randomReponses = Answers::all($columns = ['description']);
        $randomedReponses = $randomReponses->shuffle();
        $randomedReponsesFind = $randomedReponses->all();

        return view("quiz", [
            "quiz" => $quiz,
            "randomedReponses" => $randomedReponses
        ]);
    }

}