<?php

namespace App\Repositories\Position;

use App\Note;
use App\Position;


/**
 * Class PositionRepository
 * @package App\Repositories\Position
 */
class PositionRepository implements PositionInterface
{
    /**
     * @var Position
     */
    public $position;

    /**
     * PositionRepository constructor.
     * @param Position $position
     */
    function __construct(Position $position)
    {
        $this->position = $position;
    }


    /**
     * @return Position[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return $this->position->getAll();
    }

    /**
     * @param $ids
     * @return mixed
     */
    public function find($ids) {
        return $this->position->findPositions($ids);
    }
}