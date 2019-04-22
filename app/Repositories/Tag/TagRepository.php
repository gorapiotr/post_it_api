<?php

namespace App\Repositories\Tag;

use App\Tag;


/**
 * Class TagRepository
 * @package App\Repositories\Tag
 */
class TagRepository implements TagInterface
{
    /**
     * @var Tag
     */
    public $tag;

    /**
     * TagRepository constructor.
     * @param Tag $tag
     */
    function __construct(Tag $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @return Tag[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->tag->getAll();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->tag->findTag($id);
    }
}