<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayController extends Controller
{
    public function index(Request $request, $topic) {

        return view('play.reading', [
        ]);
    }
}
