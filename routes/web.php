<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* page d'accueil */
$router->get('/', [
    "as" => "home",
    "uses" => "MainController@home"
]);

/* affichage du quiz avec ses réponses en GET */
$router->get('/quiz/{id:\d+}', [
    "as" => "quiz_detail",
    "uses" => "QuizController@quiz"
]);

/* traitement du formulaire du quiz soumis et affichage des bonnes réponses, scores, etc. en POST */
$router->post('/quiz/{id}', [
    "as" => "quiz_post",
    "uses" => "QuizController@quizPost"
]);

/* formulaire d'inscription en GET */
$router->get('/signup', [
    "as" => "signup",
    "uses" => "UserController@signup"
]);

/* Traitement du formulaire d'inscription en POST */
$router->post('/signup', [
    "as" => "signup_post",
    "uses" => "UserController@signupPost"
]);

/* formulaire de connexion | GET */
$router->get('/signin', [
    "as" => "signin",
    "uses" => "UserController@signin"
]);

/* Traitement du formulaire de connexion en POST */
$router->post('/signin', [
    "as" => "signinPost",
    "uses" => "UserController@signinPost"
]);

/* Traitement de la déconnexion en GET */
$router->get('/logout', [
    "as" => "logout",
    "uses" => "UserController@logout"
]);

/* Page profil de l'utilisateur connecté en GET */
$router->get('/account', [
    "as" => "profile",
    "uses" => "UserController@profile"
]);

/* liste des tags en GET */
$router->get('/tags', [
    "as" => "tags",
    "uses" => "TagController@tags"
]);

/* Liste des quiz pour le tag donné en GET */
$router->get('/tags/{id}/quiz', [
    "as" => "quizByTag",
    "uses" => "TagController@quiz"
]);