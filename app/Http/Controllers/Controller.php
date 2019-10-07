<?php

namespace App\Http\Controllers;

use App\Utils\Flash;
use App\Utils\UserSession;
use Illuminate\Support\Facades\View;
use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function __construct()
    {
        //code à exécuter sur toutes nos pages

        //ici, on rend disponible une variable $connectedUser 
        //dans toutes nos vues !!
        View::share("connectedUser", UserSession::getUser());
    }
}
