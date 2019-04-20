<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function notes()
    {
        return $this->belongsToMany('App\Notes');
    }

    public function getAll()
    {
        return static::all();
    }
}
