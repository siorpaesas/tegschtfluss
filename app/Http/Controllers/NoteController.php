<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function create(Chapter $chapter) {
        return view('notes.create', ['chapter' => $chapter]);
    }

    public function edit(Note $note) {
        return view('notes.edit', ['note' => $note]);
    }

    public function store(Chapter $chapter) {

        request()->validate([
            'todo' => ['required', 'min:10'],
            'prio' => ['required', 'in:low,medium,high'],
        ]);

        $note = Note::create([
            'todo' => request('todo'),
            'prio' => request('prio'),
            'status' => 0
        ]);

        $chapter->note()->attach($note->id);
        return redirect('/chapters/'.$chapter->id);
    }

    public function update(Note $note) {

        $attributes = request()->validate([
            'todo' => ['required', 'min:10'],
            'prio' => ['required', 'in:low,medium,high'],
        ]);

        // Update Note
        $note->update($attributes);
        // get chapter id for redirect
        $chapterId = $note->chapter()->wherePivot('note_id', $note->id)->first()->id;
        // redirect
        return redirect('/chapters/'.$chapterId);
    }

    public function destroy(Note $note) {
        // Get id for redirect
        $chapterId = $note->chapter()->wherePivot('note_id', $note->id)->first()->id;

        // Delete note
        $note->delete();
        // Remove pivot relation
        $note->chapter()->detach($note->id);

        // Redirect to chapter
        return redirect('/chapters/'.$chapterId);
    }
}
