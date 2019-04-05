<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }

    public function update(Request $request) {
        $request->validate([
            'language' => 'required|string',
            'name' => 'string|nullable',
            'anonymous' => 'string|nullable',
        ]);

        $name = $request->post('name');
        $anonymous = $request->post('anonymous');
        $language = $request->post('language');

        $user = Auth::user();
        $user->name = !isset($anonymous) ? $name : 'Anonymous';
        $user->language = $language;
        $user->ip_address_updated = $request->ip();
        $user->save();

        session(['locale' => $language]);

        return back()->with('status', 'success');
    }

    public function delete(Request $request) {
        $user = Auth::user();
        $user->delete();

        $request->session()->invalidate();

        return redirect('/');
    }
}
