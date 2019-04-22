<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
      'text',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function note()
    {
        return $this->hasOne('App\Note');
    }

    public function findComment($id)
    {
        return static::find($id);
    }
}
