<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayController extends Controller
{
    public function index(Request $request, $topic) {
        $user = Auth::user();

        if($topic === 'food_and_drink') {
            $level = $user->userLearnedObjectives()->where('topic_name', 'food_and_drink')->count();

            if($level === 3) {
                return view('notification', [
                    'type' => 'info',
                    'message' => 'You have completed all levels in this topic.',
                ]);
            }
        }

        return view('play.reading', [
        ]);
    }
}
