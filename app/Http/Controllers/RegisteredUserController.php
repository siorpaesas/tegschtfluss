<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller {
    public function create() {
        return view('auth.register');
    }

    public function store() {
        // validate the form input
        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'max:254'],
            'password' => ['required', Password::default(), 'confirmed']
        ]);

        // Create the validated user
        $user = User::create($validatedAttributes);

        // Login the user
        Auth::login($user);

        // redirect
        return redirect('/chapters');
    }
}
