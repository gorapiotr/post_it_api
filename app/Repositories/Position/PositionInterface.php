<?php

namespace App\Repositories\Position;


interface PositionInterface
{

    public function getAll();

    public function find($ids);

}