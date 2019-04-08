<?php

namespace App\Http\Controllers;

use App\CulturalInformation;
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
            $userLearnedObjective->save();

            return back();
        }
        else if($type === 'listening') {
            $userLearnedObjective->listening = $answer;
            $userLearnedObjective->save();

            return back();
        }
        else if($type === 'writing') {
            $userLearnedObjective->writing = $answer;
            $userLearnedObjective->save();

            $culturalInformation = CulturalInformation::inRandomOrder()->first();

            if($answer) {
                return view('notification', [
                    'type' => 'success',
                    'message' => 'Congratulations!. You have completed reading, listening, and writing skills in this level.',
                    'description' => $culturalInformation->english,
                ]);
            }
            else {
                return back();
            }
        }
    }
}
