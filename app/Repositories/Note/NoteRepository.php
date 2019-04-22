<?php

namespace App\Repositories\Note;

use App\Note;


class NoteRepository implements NoteInterface
{
    public $note;

    function __construct(Note $note)
    {
        $this->note = $note;
    }

    public function getAll()
    {
        return $this->note->getAll();
    }

    public function find($id)
    {
        return $this->note->findNote($id);
    }
}