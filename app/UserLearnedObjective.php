<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLearnedObjective extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }
    public function learningObjective() {
        return $this->belongsTo('App\LearningObjective');
    }
}
