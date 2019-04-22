<?php

namespace App\Repositories\Comment;

use App\Comment;

class CommentRepository implements CommentInterface
{
    public $comment;

    function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function find($id)
    {
        return $this->comment->findComment($id);
    }
}