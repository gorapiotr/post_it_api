<?php

namespace App\Repositories\Tag;

use App\Tag;


class TagRepository implements TagInterface
{
    public $tag;

    function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }


    public function getAll()
    {
        return $this->tag->getAll();
    }
}