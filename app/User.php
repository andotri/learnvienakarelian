<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class User extends Authenticatable
{
    use SoftDeletes;

    public function setWeeklyScore() {
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

    public function setLifetimeScore() {
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

    public function setRank() {
        if($this->weekly_score === 0) {
            return -1;
        }

        $rank = DB::table('users')
            ->where('weekly_score', '>=', $this->weekly_score)
            ->count();

        $this->weekly_rank = $rank;
        $this->save();
    }

    public function ordinal($number) {
        $ends = array('th','st','nd','rd','th','th','th','th','th','th');
        if ((($number % 100) >= 11) && (($number%100) <= 13))
            return $number. 'th';
        else
            return $number. $ends[$number % 10];
    }

    public function getLevels() {
        $topicNames = ['food_and_drink', 'clothing', 'furniture', 'season', 'number', 'body', 'days_and_months'];

        $topicLevels = [
            ['food_and_drink', 0],
            ['clothing', 0],
            ['furniture', 0],
            ['season', 0],
            ['number', 0],
            ['body', 0],
            ['days_and_months', 0],
        ];

        foreach ($this->userLearnedObjectives()->get() as $userLearnedObjective) {
            $learningObjective = $userLearnedObjective->learningObjective()->first();

            $topicName = $learningObjective->topic_name;
            $topicIndex = array_search($topicName, $topicNames);

            $counter = $userLearnedObjective->reading + $userLearnedObjective->listening + $userLearnedObjective->writing;
            if($counter === 3) {
                $levels = $topicLevels[$topicIndex][1] + 1;
            }
            else if($counter === 0) {
                $levels = $topicLevels[$topicIndex][1];
            }
            else {
                $levels = $topicLevels[$topicIndex][1] + 0.5;
            }

            $topicLevels[$topicIndex] = [
                $topicLevels[$topicIndex][0],
                $levels,
            ];
        }

        return $topicLevels;
    }

    public function userLearnedObjectives() {
        return $this->hasMany('App\UserLearnedObjective');
    }
}
