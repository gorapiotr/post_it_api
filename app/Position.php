<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillable = [
        'text',
        'done'
    ];

    public function Note()
    {
        return $this->hasOne('App/Note');
    }

    public function getAll()
    {
        return static::all();
    }

    public function findPositions($ids) {
        return static::find($ids);
    }
}
