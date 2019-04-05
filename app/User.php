<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use SoftDeletes;

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

    public function getRank() {
        $rank = DB::table('users')
            ->where('weekly_score', '>=', $this->weekly_score)
            ->count();

        return $this->ordinal($rank);
    }

    private function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }

    public function userLearnedObjectives() {
        return $this->hasMany('App\UserLearnedObjective');
    }
}
