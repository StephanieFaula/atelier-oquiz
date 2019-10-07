<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = "questions";
    //pas besoin de spécifier le nom de table, on suit les conventions !

    //ma question appartient à un quiz 
    public function quiz()
    {
        //on spécifie à quel Modèle est relié Question
        //on spécifie aussi quelle est la colonne contenant la clé étrangère
        return $this->belongsTo("App\Models\Quizzes");
    }

    public function level()
    {
        return $this->belongsTo("App\Models\Levels", "levels_id");
    }

}