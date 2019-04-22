<?php

namespace App\Repositories\Note;

use App\Note;


/**
 * Class NoteRepository
 * @package App\Repositories\Note
 */
class NoteRepository implements NoteInterface
{
    /**
     * @var Note
     */
    public $note;

    /**
     * NoteRepository constructor.
     * @param Note $note
     */
    function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * @return Note[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->note->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->note->findNote($id);
    }
}