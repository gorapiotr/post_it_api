<?php

namespace App\Repositories\Position;

use App\Note;
use App\Position;


class PositionRepository implements PositionInterface
{
    public $position;

    function __construct(Position $position)
    {
        $this->position = $position;
    }


    public function getAll()
    {
        return $this->position->getAll();
    }

    public function find($ids) {
        return $this->position->findPositions($ids);
    }
}