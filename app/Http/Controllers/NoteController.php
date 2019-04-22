<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\RemoveNoteRequest;
use App\Http\Requests\RemoveTagRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Note;
use App\Presenters\Note\NotePresenter;
use App\Presenters\Note\NotesListPresenter;
use App\Repositories\Note\NoteInterface;

/**
 * Class NoteController
 * @package App\Http\Controllers
 */
class NoteController extends Controller
{
    /**
     * @var NoteInterface
     */
    public $note;

    /**
     * NoteController constructor.
     * @param NoteInterface $note
     */
    public function __construct(NoteInterface $note)
    {
        $this->note = $note;
    }

    /**
     * Get all notes
     *
     * @return NotesListPresenter
     */
    public function index()
    {
        $notes = $this->note->getAll();

        return new NotesListPresenter($notes);
    }

    /**
     * Show note by id
     *
     * @param int $noteId
     * @return NotePresenter
     */
    public function show(int $noteId)
    {
        $note = $this->note->find($noteId);

        return new NotePresenter($note);
    }

    /**
     * Create new instance Note
     *
     * @param CreateNoteRequest $request
     * @return NotePresenter
     */
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

    /**
     * Update note
     *
     * @param UpdateNoteRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateNoteRequest $request)
    {
        $note = $this->note->find($request->id);
        $note->fill($request->all());
        $response = $note->save();

        return response()->json(['success' => $response]);
    }

    /**
     * Remove note
     *
     * @param RemoveNoteRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove(RemoveNoteRequest $request)
    {
        $note = $this->note->find($request->id);
        $response = $note->delete();
        return response()->json(['success' => $response]);
    }

    /**
     * Get all notes comments
     *
     * @param int $noteId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getNotesComponents(int $noteId)
    {
        return response()->json($this->note->find($noteId)->comments->toArray());
    }
}
