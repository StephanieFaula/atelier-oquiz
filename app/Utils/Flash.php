<?php 

namespace App\Utils;

/**
 * Cette class permet de créer des messages destiné aux users.
 * Ces messages sont affichés après une redirection, puis supprimés ! 
 */
abstract class Flash 
{

    /**
     * Crée un message en session afin qu'il soit affiché sur la prochaine page
     */
    public static function create(string $message, string $class)
    {
        $_SESSION['flash'] = [
            'class' => $class,
            'message' => $message
        ];
    }

    /**
     * Efface le message flash de la session
     */
    private static function delete()
    {
        unset($_SESSION['flash']);
    }

    /**
     * génère le html du message flash, puis l'efface
     */
    public static function getHTML() :? string
    {
        if (empty($_SESSION['flash'])){
            return null;
        }

        $html = '<div class="alert alert-' . $_SESSION['flash']['class'] . '">';
        $html .= $_SESSION['flash']['message'];
        $html .= '</div>';

        self::delete();

        return $html;
    }

}