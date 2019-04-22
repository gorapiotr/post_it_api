<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Position
 * @package App
 */
class Position extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'text',
        'done'
    ];

    /**
     * Get note
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Note()
    {
        return $this->hasOne('App/Note');
    }

    /**
     * Get all positions
     *
     * @return Position[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return static::all();
    }

    /**
     * Find positions by number array
     *
     * @param $ids
     * @return mixed
     */
    public function findPositions(Array $ids) {
        return static::find($ids);
    }
}
