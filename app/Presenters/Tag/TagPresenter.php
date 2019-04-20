<?php

namespace App\Presenters\Tag;

use Illuminate\Http\Resources\Json\Resource;

class TagPresenter extends Resource
{
    public function toArray($request): array
    {
        $return = [
            'id' => $this->id,
            'name' => $this->name,
        ];
        return $return;
    }
}