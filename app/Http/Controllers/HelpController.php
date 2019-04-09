<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpController extends Controller
{
    public function index() {
        return view('feedback');
    }

    public function create(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $feedback = new Feedback();
        $feedback->user_id = Auth::user()->id;
        $feedback->title = $request->post('title');
        $feedback->description = $request->post('description');
        $feedback->save();

        return back()->with('status', 'success');
    }
}
