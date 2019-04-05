<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeedbackController extends Controller
{
    public function index() {
        return view('feedback');
    }

    public function create(Request $request) {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $title = $request->post('title');
        $description = $request->post('description');

        $feedback = new Feedback();
        $feedback->user_id = Auth::user()->id;
        $feedback->title = $title;
        $feedback->description = $description;
        $feedback->save();

        return back()->with('status', 'success');
    }
}
