<?php

namespace App\Repositories\Comment;

use App\Comment;

/**
 * Class CommentRepository
 * @package App\Repositories\Comment
 */
class CommentRepository implements CommentInterface
{
    /**
     * @var Comment
     */
    public $comment;

    /**
     * CommentRepository constructor.
     * @param Comment $comment
     */
    function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return $this->comment->findComment($id);
    }
}