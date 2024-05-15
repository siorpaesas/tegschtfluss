<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Chapter;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function create(Chapter $chapter) {
        return view('stats.create', ['chapter' => $chapter]);
    }

    public function edit(Build $build) {
        return view('stats.edit', ['chapter' => $build]);
    }

    public function store(Chapter $chapter) {
        $attributes = request()->validate([
            'chapter_id' => ['required', 'exists:chapters'],
            'words' => ['required', 'integer'],
            'length' => ['required', 'integer'],
            'message' => ['required'],
        ]);

        Build::create($attributes);

        return redirect('/chapters/{chapter}');
    }
}
