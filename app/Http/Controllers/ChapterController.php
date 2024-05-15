<?php

namespace App\Http\Controllers;

use App\Models\Build;
use App\Models\Chapter;

class ChapterController extends Controller {
    public function index() {
        $chapters = Chapter::with('book')
            ->orderBy('sequence')
            ->paginate(12);

        return view('chapters.index', [
            'chapters' => $chapters
        ]);
    }

    public function create() {
        return view('chapters.create');
    }

    public function store() {
        request()->validate([
            //'book_id' => ['exists:books,id'],
            'chapter' => ['required', 'min:3'],
            'excerpt' => ['required', 'min:10'],
            'sequence' => ['numeric']
        ]);

        request()->attributes->set('chapter', 'name');

        Chapter::create([
            'book_id' => 1,
            'name' => request('chapter'),
            'excerpt' => request('excerpt'),
            'sequence' => request('sequence')
        ]);

        return redirect('/chapters');
    }

    public function show(Chapter $chapter) {

        // Get Notes in a separate variable to be able to sort them
        // Important: Must be solved with CASE due to the use of sqlite.
        $notes = $chapter->note()->orderByRaw("CASE prio WHEN 'low' THEN 3 WHEN 'medium' THEN 2 WHEN 'high' THEN 1 ELSE 4 END")->get();

        // Get last build for chapter statistics teaser
        $lastBuild = Build::where('chapter_id', $chapter->id)->latest()->first();
        return view('chapters.show', ['chapter' => $chapter, 'notes'=> $notes, 'lastBuild' => $lastBuild]);
    }

    public function edit(Chapter $chapter) {
        return view('chapters.edit', ['chapter' => $chapter]);
    }

    public function update(Chapter $chapter) {
        // authorize
        // validate
        request()->validate([
            'chapter' => ['required', 'min:3'],
            'excerpt' => ['required', 'min:10'],
            'sequence' => ['numeric']
        ]);

        request()->attributes->set('chapter', 'name');

        $chapter->update([
            'name' => request('chapter'),
            'excerpt' => request('excerpt'),
            'sequence' => request('sequence')
        ]);

        // redirect the chapter's page
        return redirect('/chapters/' . $chapter->id);
    }

    public function destroy(Chapter $chapter) {
        $chapter->delete();
        return redirect('/chapters');
    }
}
