<?php

namespace App\Utils;

abstract class UserSession {

    // Constante contenant l'index du tableau de session
    const SESSION_INDEX_NAME = 'connectedUser';

    /**
     * Méthode permettant de connecter un utilisateur
     * 
     * @param \App\Models\User $user
     */
    public static function connect(\App\Models\AppUsers $user) 
    {
        //on stocke dans la session l'objet user au complet
        //la clef du tableau est celle de la constante
        $_SESSION[self::SESSION_INDEX_NAME] = $user;
    }

    /**
     * Méthode permettant de déconnecter un utilisateur
     */
    public static function disconnect() 
    {
        //détruit tout ce qui est dans la variable $_SESSION 
        //session_destroy();

        //détruit seulement notre clé de session utilisateur pour conserver le reste
        unset($_SESSION[self::SESSION_INDEX_NAME]);
    }

    /**
     * Méthode permettant de savoir si le visiteur est connecté à un compte
     * 
     * @return bool
     */
    public static function isConnected() : bool 
    {
        //si la clef connectedUser de la session ne contient rien, on return false
        //sinon true
        return (empty($_SESSION[self::SESSION_INDEX_NAME])) ? false : true;
    }

    /**
     * Méthode permettant de récupérer le Model de l'utilisateur connecté
     * 
     * @return \App\Models\User || null
     */
    public static function getUser() :? \App\Models\AppUsers
    {
        //on retourne l'utilisateur stocké en session
        return (self::isConnected()) ? $_SESSION[self::SESSION_INDEX_NAME] : null;
    }

}