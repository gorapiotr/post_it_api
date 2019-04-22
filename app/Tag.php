<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 * @package App
 */
class Tag extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Get all notes
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function notes()
    {
        return $this->belongsToMany('App\Notes');
    }

    /**
     * Get Tags
     *
     * @return Tag[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return static::all();
    }

    /**
     * Find tag by id
     *
     * @param $id
     * @return mixed
     */
    public function findTag(int $id)
    {
        return static::find($id);
    }
}
