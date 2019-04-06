<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index() {
        $users = User::orderByRaw('weekly_rank = 0, weekly_rank')->paginate(10);

        foreach ($users as $user) {
            $user->setWeeklyScore();
            $user->setLifetimeScore();
            $user->setRank();
        }

        return view('leaderboard', [
            'users' => $users,
        ]);
    }
}
