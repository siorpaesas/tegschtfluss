<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller {
    public function create() {
        return view('auth.login');
    }

    public function store() {
        // validate
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);
        // attempt to log in the user
        if(!Auth::attempt($attributes, false)) {
            throw ValidationException::withMessages([
                'password' => 'Exgüse, eui Logindate si nid korräkt!'
            ]);
        }
        // regenerate the session token
        request()->session()->regenerate();
        // redirect
        return redirect('/dashboard');
    }

    public function destroy() {
        // Log the user out
        Auth::logout();
        // Redirect to welcome page
        return redirect('/');
    }
}
