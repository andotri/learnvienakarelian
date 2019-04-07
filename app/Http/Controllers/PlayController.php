<?php

namespace App\Http\Controllers;

use App\LearningObjective;
use App\UserLearnedObjective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayController extends Controller
{
    public function index(Request $request, $topic_name) {
        $user = Auth::user();

        $userLearnedObjective = $this->getLastUserLearnedObjective($user, $topic_name);

        if($this->isValidToCreate($user, $topic_name, $userLearnedObjective)) {
            $level = $this->getNextLevel($userLearnedObjective);
            $userLearnedObjective = $this->createUserLearnedObjective($user, $topic_name, $level);
        }

        if(is_null($userLearnedObjective->reading) || !$userLearnedObjective->reading) {
            echo 'reading';
            echo $userLearnedObjective->level;
        }
        else if(is_null($userLearnedObjective->listening) || !$userLearnedObjective->listening) {
            echo 'listening';
            echo $userLearnedObjective->level;
        }
        else if(is_null($userLearnedObjective->writing) || !$userLearnedObjective->writing) {
            echo 'writing';
            echo $userLearnedObjective->level;
        }
        else {
            return view('notification', [
                'type' => 'info',
                'message' => 'You have completed all levels in this topic.',
            ]);
        }
    }

    private function getLastUserLearnedObjective($user, $topic_name) {
        $userLearnedObjective = $user->userLearnedObjectives()
            ->where('topic_name', $topic_name)
            ->orderBy('id', 'desc')
            ->first();

        return $userLearnedObjective;
    }

    private function getNextLevel($userLearnedObjective) {
        if(is_null($userLearnedObjective))
            $level = 'easy';
        else if($userLearnedObjective->level === 'easy')
            $level = 'medium';
        else
            $level = 'hard';

        return $level;
    }

    private function isValidToCreate($user, $topic_name, $userLearnedObjective) {
        $totalLevels = $user->userLearnedObjectives()->where('topic_name', $topic_name)->count();
        $totalSkills = is_null($userLearnedObjective) ? 0 :
            $userLearnedObjective->reading + $userLearnedObjective->listening + $userLearnedObjective->writing;

        return is_null($userLearnedObjective) ||
            ($totalLevels === 1 && $totalSkills === 3) ||
            ($totalLevels === 2 && $totalSkills === 3);
    }

    private function createUserLearnedObjective($user, $topic_name, $level) {
        $learningObjective = LearningObjective::
        where('topic_name', $topic_name)->
        where('level', $level)->
        inRandomOrder()->first();

        $userLearnedObjective = new UserLearnedObjective();
        $userLearnedObjective->user_id = $user->id;
        $userLearnedObjective->learning_objective_id = $learningObjective->id;
        $userLearnedObjective->topic_name = $learningObjective->topic_name;
        $userLearnedObjective->level = $learningObjective->level;
        $userLearnedObjective->save();

        return $userLearnedObjective;
    }
}
