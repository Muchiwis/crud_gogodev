<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class NoteController extends Controller
{
    public function index(): View
    {
        $notes = Note::all();
        return view('note.index', compact('notes'));
    }

    public function create(): View
    {
        return view('note.create');
    }
    public function store(NoteRequest $request): RedirectResponse
    {

        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created');
    }
    public function edit($note): View
    {
        $notes = Note::find($note);
        return view('note.edit', compact('notes'));
    }
    public function update(NoteRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    public function destroy($note): RedirectResponse
    {
        Note::destroy($note);
        return redirect()->route('note.index')->with('danger','Note destroyed');
    }

    public function show($note): View
    {
        $notes = Note::find($note);
        return view('note.show', compact('notes'));
    }
}
