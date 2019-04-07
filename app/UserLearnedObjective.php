<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLearnedObjective extends Model
{
    protected $fillable = ['user_id', 'learning_objective_id', 'topic_name', 'level', 'listening', 'reading', 'writing', 'created_at', 'updated_at'];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function learningObjective() {
        return $this->belongsTo('App\LearningObjective');
    }
}
