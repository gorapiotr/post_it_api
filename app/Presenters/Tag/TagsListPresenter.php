<?php

namespace App\Presenters\Tag;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TagsListPresenter extends ResourceCollection
{
    public function toArray($request): array
    {
        return ['data' => TagPresenter::collection($this)];
    }
}