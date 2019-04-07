<?php

namespace App\Http\Controllers;

use App\LearningObjective;
use App\UserLearnedObjective;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    public function index(Request $request) {
        $id = $request->get('id');
        $type = $request->get('type');
        $answer = filter_var($request->get('answer'), FILTER_VALIDATE_BOOLEAN);

        $userLearnedObjective = UserLearnedObjective::where('id', $id)->first();
        if($type === 'reading') {
            $userLearnedObjective->reading = $answer;
        }
        else if($type === 'listening') {
            $userLearnedObjective->listening = $answer;
        }
        else if($type === 'writing') {
            $userLearnedObjective->writing = $answer;
        }

        $userLearnedObjective->save();

        return back();
    }
}
