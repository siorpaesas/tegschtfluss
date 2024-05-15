<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function show() {
        $books = auth()->user()->books()->paginate(10);
        return view('settings.edit', ['books' => $books]);
    }
}
