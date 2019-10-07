<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model 
{
    protected $table = "quizzes";
    // La fonction porte le nom de la propriété que l'on souhaite créer
    public function author()
    {
        // Je spécifie qu elle column de ma table contient la clé étrangère afin qu éloquent soit capable de faire la jointure
        return $this->belongsTo("App\Models\AppUsers", "app_users_id");
    }

    public function questions() 
    {
        return $this->hasMany("App\Models\Questions", "quizzes_id");
    }
}