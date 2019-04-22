<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Http\Requests\RemoveCommentRequest;
use App\Http\Requests\RemoveTagRequest;
use App\Note;
use App\Presenters\Note\NotePresenter;
use App\Repositories\Comment\CommentInterface;

class CommentController extends Controller
{
    public $comment;

    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

    public function create(CreateCommentRequest $request)
    {
        $comment = new Comment();
        $comment->user_id = auth()->id();
        $comment->note_id = $request->note_id;
        $comment->fill($request->all());
        $response = $comment->save();

        return response()->json(['success' => $response]);
    }

    public function remove(RemoveCommentRequest $request)
    {
        $comment = $this->comment->find($request->id);
        $response = $comment->delete();
        return response()->json(['success' => $response]);
    }
}
