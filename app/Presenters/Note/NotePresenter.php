<?php

namespace App\Presenters\Note;

use Illuminate\Http\Resources\Json\Resource;

class NotePresenter extends Resource
{
    public function toArray($request): array
    {
        $return = [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'author' => [
                'name' => $this->user->name,
                'email' => $this->user->email
            ]
        ];
        return $return;
    }
}