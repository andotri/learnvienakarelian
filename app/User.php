<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function refreshWeeklyScore() {
        $userLearnedObjectives = $this->userLearnedObjectives()
            ->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])
            ->get();
        $score = 0;
        foreach ($userLearnedObjectives as $userLearnedObjective) {
            if($userLearnedObjective->listening) $score += 100;
            if($userLearnedObjective->reading) $score += 100;
            if($userLearnedObjective->writing) $score += 100;
        }
        $this->weekly_score = $score;
        $this->save();
    }
    public function refreshLifetimeScore() {
        $userLearnedObjectives = $this->userLearnedObjectives()->get();
        $score = 0;
        foreach ($userLearnedObjectives as $userLearnedObjective) {
            if($userLearnedObjective->listening) $score += 100;
            if($userLearnedObjective->reading) $score += 100;
            if($userLearnedObjective->writing) $score += 100;
        }
        $this->lifetime_score = $score;
        $this->save();
    }
    public function userLearnedObjectives() {
        return $this->hasMany('App\UserLearnedObjective');
    }
}
