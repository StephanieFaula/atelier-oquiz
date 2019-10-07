<?php

namespace App\Http\Controllers;

use App\Models\AppUsers;

use App\Utils\Flash;
use App\Utils\UserSession;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function signup(Request $request)
    {
        return view('signup');
    }


    public function signin(Request $request)
    {
        return view('signin');
    }


    public function signupPost(Request $request)
    {
        //initialise un tableau d'erreurs vide
        $errors = [];

        //récupère toutes les données du form + nettoyage
        $password = $request->input('password');
        $passwordBis = $request->input('passwordBis');
        //nettoie notre email yeah ! 
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL); 
        $firstname = filter_var($request->input('firstname'), FILTER_SANITIZE_EMAIL); 
        $lastname = filter_var($request->input('lastname'), FILTER_SANITIZE_EMAIL); 

        //validation de l'email
        if (empty($email)){
            $errors["email"] = "Veuillez renseigner un email !";
        }
        elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors["email"] = "Votre email n'est correct !";
        }
        else {
            //est-ce qu'il existe déjà en bdd ??
            // SELECT * FROM app_users WHERE email = :email 
            $existingEmail = AppUsers::where("email", $email)->first();
            //si on l'a trouvé...
            if (!empty($existingEmail)){
                //attention à la privacy ici ! 
                $errors["email"] = "Cet email semble vaguement familier, mais après j'en sais rien, je peux me tromper !"; 
            }
        }

        //validation du firstname
        if (empty($firstname)){
            $errors["firstname"] = "Veuillez renseigner un prénom !";
        }
        elseif(strlen($firstname) <= 2 || strlen($firstname) > 24){
            $errors["firstname"] = "Votre prénom doit avoir entre 3 et 24 caractères !";
        }

        //validation du lastname
        if (empty($lastname)){
            $errors["lastname"] = "Veuillez renseigner un nom !";
        }
        elseif(strlen($firstname) <= 2 || strlen($firstname) > 24){
            $errors["lastname"] = "Votre nom doit avoir entre 3 et 24 caractères !";
        }

        //password ok ? 
        if(empty($password)){
            $errors["password"] = "Veuillez renseigner un mot de passe !";
        }
        elseif(strlen($password) < 8){
            $errors["password"] = "Votre mot de passe doit avoir minimum 8 caractères !";
        }
        elseif(strlen($password) > 1000){
            $errors["password"] = "Max 1000 caractères pour le mdp !";
        }

        //password bis identiques ? 
        if ($password != $passwordBis){
            $errors["password-bis"] = "Vos mdps ne sont pas identiques !";
        }

        //si le form est valide...
        if (empty($errors)){
            //créer une instance de model User
            $user = new AppUsers();

            //l'hydrater
            $user->firstname = $firstname;
            $user->lastname = $lastname;
            $user->email = $email;

            //hash le mdp ! pour ne pas avoir es mdp en clair dans la bdd
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $user->password = $hash;

            // BONUS: on donne le rôle user à cette personne
            // $user->role = "user";

            //le sauvegarder
            $user->save();

            //BONUS: affiche le message après la redirection
            // Flash::create("Votre compte a bien été créé !", "success");

            //@todo connecter l'utilisateur automatiquement ! 
            //  UserSession::connect($user);

            //redirige l'utilisateur vers la page de connexion
            //$this->redirectToRoute('home') sous SF
            return redirect()->route('home');
        }

        return view("signup", [
            "errors" => $errors, 
            "values" => [
                "firstname"  => $firstname,
                "lastname"  => $lastname,
                "email"     => $email,
                "password"     => $password
            ],
        ]);
    }

    public function signinPost(Request $request)
    {
        //initialise un tableau d'erreurs vide
        $error = "";

        //récupère toutes les données du form + nettoyage
        $password = $request->input('password');
        //nettoie notre email yeah ! 
        $email = filter_var($request->input('email'), FILTER_SANITIZE_EMAIL); 

        //est-ce qu'il existe déjà en bdd ??
        // SELECT * FROM app_users WHERE email = :email 
        $userFromDb = AppUsers::where("email", $email)->first();
        //si on l'a pas trouvé...
        if (empty($userFromDb)){
            //un message vague
            $error = "Mauvais identifiants !";
        }
        else {
            //vérifie le mot de passe ! 
            $isPasswordValid = password_verify($password, $userFromDb->password);
            
            //s'il ne correspond pas... 
            if (!$isPasswordValid){
                $error = "Mauvais identifiants !";
            }
        }

        //si le form est valide et les identifiants sont bons...
        if (empty($error)){
            //on connecte le user
            UserSession::connect($userFromDb);

            //affiche le message après la redirection
            Flash::create("Vous êtes connecté !", "success");

            return redirect()->route("home");
        }

        return view("signin", [
            "error" => $error, 
            "values" => [
                "email" => $email
            ],
        ]);

    }

        /* traite la déconnexion */
        public function logout()
        {
            UserSession::disconnect();
    
            //affiche le message après la redirection
            Flash::create("Vous êtes déconnecté !", "success");
    
            //redirige 
            return redirect()->route("signin");
        }

}