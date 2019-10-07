<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model 
{
   // Méthode Pivot quizzes_has_tags
   public function quizzesHasTags()
   {
       // Je spécifie qu elle column de ma table contient la clé étrangère afin qu éloquent soit capable de faire la jointure
       return $this->belongsToMany("App\Models\Quizzes", "quizzes_has_tags", "tags_id", "quizzes_id");
   }
}