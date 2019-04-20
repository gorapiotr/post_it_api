<?php

namespace App\Http\Controllers;

use App\Presenters\Tag\TagsListPresenter;
use App\Repositories\Tag\TagInterface;

class TagController extends Controller
{
    public $tag;

    public function __construct(TagInterface $tag)
    {
        $this->tag = $tag;
    }

    public function index()
    {
        $tags = $this->tag->getAll();

        return new TagsListPresenter($tags);
    }
}
