<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public function Note()
    {
        return $this->hasOne('App/Note');
    }
}