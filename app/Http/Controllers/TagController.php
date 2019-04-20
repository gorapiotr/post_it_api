<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagRequest;
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

    public function update(UpdateTagRequest $request)
    {
        $tag = $this->tag->find($request->id);

        $tag->fill($request->all());
        $response = $tag->save();
        return response()->json(['success' => $response]);
    }
}
