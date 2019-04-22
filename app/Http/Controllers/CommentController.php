<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\RemoveCommentRequest;
use App\Repositories\Comment\CommentInterface;

/**
 * Class CommentController
 * @package App\Http\Controllers
 */
class CommentController extends Controller
{
    /**
     * @var CommentInterface
     */
    public $comment;

    /**
     * CommentController constructor.
     * @param CommentInterface $comment
     */
    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Create new comment instance
     *
     * @param CreateCommentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateCommentRequest $request)
    {
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->note_id = $request->note_id;
        $comment->fill($request->all());
        $response = $comment->save();

        return response()->json(['success' => $response]);
    }

    /**
     * Remove comment
     *
     * @param RemoveCommentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function remove(RemoveCommentRequest $request)
    {
        $comment = $this->comment->find($request->id);
        $response = $comment->delete();
        return response()->json(['success' => $response]);
    }
}
