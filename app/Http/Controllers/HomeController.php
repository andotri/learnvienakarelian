<?php

namespace App\Http\Controllers;

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
        $user->refreshWeeklyScore();
        $user->refreshLifetimeScore();
        $rank = $user->getRank();

        return view('home', [
            'rank' => $rank
        ]);
    }
}
