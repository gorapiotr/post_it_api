<?php

namespace App\Presenters\Note;

use Illuminate\Http\Resources\Json\ResourceCollection;

class NotesListPresenter extends ResourceCollection
{
    public function toArray($request): array
    {
        return ['data' => NotePresenter::collection($this)];
    }
}