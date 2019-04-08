<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LearningObjective extends Model
{
    protected $fillable = ['topic_name', 'level', 'english', 'finnish', 'viena_karelian', 'picture', 'voice'];

    public function userLearnedObjectives() {
        return $this->hasMany('App\UserLearnedObjective');
    }
}
