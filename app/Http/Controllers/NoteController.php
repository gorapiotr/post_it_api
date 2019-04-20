<?php

namespace App\Http\Controllers;

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
}
