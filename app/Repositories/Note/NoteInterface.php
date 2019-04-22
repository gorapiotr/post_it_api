<?php

namespace App\Repositories\Note;


interface NoteInterface
{

    public function getAll();

    public function find($id);
}