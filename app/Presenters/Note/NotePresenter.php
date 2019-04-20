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
            ],
            'tags' => $this->tags->map(function ($item) {
                return $item['name'];
            }),
            'positions' => $this->positions->map(function ($item) {
                return [
                    'id' => $item->id,
                    'text' => $item->text,
                    'done' => $item->done
                ];
            })
        ];
        return $return;
    }
}