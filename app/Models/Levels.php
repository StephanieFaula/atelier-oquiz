<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model 
{
    protected $table = "levels";

    public function questions()
    {
        return $this->hasMany("App\Models\Questions");
    }
}