<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Levels extends Model 
{
    public function level() 
    {
        return $this->hasMany("App\Models\Questions", "level_id");
    }
}