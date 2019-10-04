<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppUsers extends Model 
{
    protected $table = "app_users";
    // Créer une propriété permettant de facilement accèder au quiz créer par ce user
    public function createdQuizzes()
    {
        return $this->hasMany("App\Models\Quizzes");
    }
}