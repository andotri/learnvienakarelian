<?php

namespace App\Http\Controllers;

use App\UserLearnedObjective;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user->setWeeklyScore();
        $user->setLifetimeScore();
        $user->setRank();

        $rank = $user->ordinal($user->weekly_rank);

        $levels = $user->getLevels();
        $stars = [];

        foreach ($levels as $level) {
            $stars[] = $this->getStars($level[1]);
        }

        return view('home', [
            'rank' => $rank,
            'levels' => $levels,
            'stars' => $stars,
        ]);
    }

    private function getStars($level) {
        $starEmpty = '<i class="far fa-star"></i>';
        $starHalf = '<i class="fas fa-star-half-alt"></i>';
        $starFull = '<i class="fas fa-star"></i>';

        $stars = '';

        if($level === 0)
            $stars = $starEmpty . $starEmpty . $starEmpty;
        else if($level === 0.5)
            $stars = $starHalf . $starEmpty . $starEmpty;
        else if($level === 1)
            $stars = $starFull . $starEmpty . $starEmpty;
        else if($level === 1.5)
            $stars = $starFull . $starHalf . $starEmpty;
        else if($level === 2)
            $stars = $starFull . $starFull . $starEmpty;
        else if($level === 2.5)
            $stars = $starFull . $starFull . $starHalf;
        else if($level === 3)
            $stars = $starFull . $starFull . $starFull;

        return $stars;
    }
}
