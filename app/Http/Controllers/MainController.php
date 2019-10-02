<?php

namespace App\Http\Controllers;

use App\Models\Quizzes;
// use App\Models\;

//faire bien gaffe à utiliser celui-ci et pas un autre !!!
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /* affiche la page d'accueil */
    public function home(Request $request)
    {
        $quizzes = Quizzes::all();
        //dd($quizzes);
        return view('home', ["quizzes" => $quizzes]);
    }
}