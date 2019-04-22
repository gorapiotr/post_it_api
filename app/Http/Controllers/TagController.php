<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTagRequest;
use App\Http\Requests\RemoveTagRequest;
use App\Http\Requests\UpdateTagRequest;
use App\Presenters\Tag\TagsListPresenter;
use App\Repositories\Tag\TagInterface;
use App\Tag;

/**
 * Class TagController
 * @package App\Http\Controllers
 */
class TagController extends Controller
{
    /**
     * @var TagInterface
     */
    public $tag;

    /**
     * TagController constructor.
     * @param TagInterface $tag
     */
    public function __construct(TagInterface $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get all tags
     *
     * @return TagsListPresenter
     */
    public function index()
    {
        $tags = $this->tag->getAll();

        return new TagsListPresenter($tags);
    }

    /**
     * Update tag
     *
     * @param UpdateTagRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTagRequest $request)
    {
        $tag = $this->tag->find($request->id);

        $tag->fill($request->all());
        $response = $tag->save();
        return response()->json(['success' => $response]);
    }

    /**
     * Create new tag
     *
     * @param CreateTagRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateTagRequest $request)
    {
        $tag = new Tag();
        $tag->fill($request->all());
        $response = $tag->save();
        return response()->json(['success' => $response]);
    }

    /**
     * Remove tag
     *
     * @param RemoveTagRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove(RemoveTagRequest $request)
    {
        $tag = $this->tag->find($request->id);
        $response = $tag->delete();
        return response()->json(['success' => $response]);
    }
}
