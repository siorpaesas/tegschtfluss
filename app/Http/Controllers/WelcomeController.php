<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Version;

class WelcomeController extends Controller
{
    public function index() {
        return view('home', [
            'version' => Version::latest(),
            'book' => Book::find(1)
        ]);
    }

    public function about() {
        return view('about', [
            'version' => Version::latest()
        ]);
    }
}
