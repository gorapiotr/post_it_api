<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Note;
use App\Presenters\Note\NotePresenter;
use App\Presenters\Note\NotesListPresenter;
use App\Repositories\Note\NoteInterface;

class NoteController extends Controller
{
    public $note;

    public function __construct(NoteInterface $note)
    {
        $this->note = $note;
    }

    public function index()
    {
        $notes = $this->note->getAll();

        return new NotesListPresenter($notes);
    }

    public function show(int $noteId)
    {
        $note = $this->note->find($noteId);

        return new NotePresenter($note);
    }

    public function create(CreateNoteRequest $request)
    {
        $note = new Note();
        $note->user_id = auth()->id();
        $note->fill($request->all());
        $response = $note->save();
        $note->tags()->attach(collect($request->tags)->map(function ($tag) {
            return $tag['id'];
        }));

        return new NotePresenter($note);
    }

    public function update(UpdateNoteRequest $request)
    {
        $note = $this->note->find($request->id);
        $note->fill($request->all());
        $response = $note->save();

        return response()->json(['success' => $response]);
    }

    public function getNotesComponents(int $noteId)
    {
        return response()->json($this->note->find($noteId)->comments->toArray());
    }
}
