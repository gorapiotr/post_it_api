<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function getAll()
    {
        return static::all();
    }
}
