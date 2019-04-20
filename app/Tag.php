<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $guarded = [
        'id'
    ];

    public function notes()
    {
        return $this->belongsToMany('App\Notes');
    }

    public function getAll()
    {
        return static::all();
    }

    public function findTag($id)
    {
        return static::find($id);
    }
}
