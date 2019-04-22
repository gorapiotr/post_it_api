<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable =[
        'title',
        'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tags_notes');
    }

    public function positions()
    {
        return $this->hasMany('App\Position');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function getAll()
    {
        return static::all();
    }

    public function findNote($id)
    {
        return static::find($id);
    }
}
