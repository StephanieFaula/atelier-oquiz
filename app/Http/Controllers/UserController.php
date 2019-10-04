<?php

namespace App\Http\Controllers;

use App\Models\AppUsers;
// use App\Models\;

//faire bien gaffe à utiliser celui-ci et pas un autre !!!
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
        //récupère toutes les données du form
        $firstname = $request->input("firstname", "");
        $lastname = $request->input("lastname", "");
        $email = $request->input("email", "");
        $psw = $request->input("psw", "");
        $psw2 = $request->input("psw2", "");

        //validation
        $errors = [];

        //champs obligatoires
        if (empty($firstname)){
            $errors[] = "Veuillez renseigner votre prénom !";
        }
        if (empty($lastname)){
            $errors[] = "Veuillez renseigner votre nom !";
        }
        if (empty($email)){
            $errors[] = "Veuillez renseigner votre adresse mail !";
        }
        if (empty($psw) || empty($psw2)){
            $errors[] = "Veuillez renseigner deux fois le mot de passe !";
        }

        //validation mdp similaires
        if ($psw == $psw2) {
            $password = $psw;
        } else {
            $errors[] = "Les mots de passe sont incorrects !";
        }

        //longueur des champs
        if (strlen($email) > 255){
            $errors[] = "Votre email est trop long ! 255 car. max. SVP";
        }
        if (strlen($password) > 60){
            $errors[] = "Votre mot de passe est trop long ! 60 car. max. SVP";
        }

        //si tout est valide... 
        if(empty($errors)){
            //alors, on insère en bdd ! 

            //on instancie notre modèle 
            $form = new AppUsers();

            //on l'hydrate avec les dates du formulaires
            $form->firstname = $firstname;
            $form->lastname = $lastname;
            $form->email = $email;
            $form->password = $password;

            //on sauvegarde ! 
            $form->save();

            //on redirige vers l'accueil !
            return redirect()->route("home");
        } 
        else {
            return view("signup", [
                "errors" => $errors
            ]);
        }

    }
}