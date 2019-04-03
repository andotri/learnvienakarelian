<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningObjective extends Model
{
    public function userLearnedObjectives() {
        return $this->hasMany('App\UserLearnedObjective');
    }
}
