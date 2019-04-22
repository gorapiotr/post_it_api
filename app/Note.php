<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Note
 * @package App
 */
class Note extends Model
{
    /**
     * @var array
     */
    protected $fillable =[
        'title',
        'description'
    ];

    /**
     * Get user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get all tags
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'tags_notes');
    }

    /**
     * Get all note positions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function positions()
    {
        return $this->hasMany('App\Position');
    }

    /**
     * Get comments
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    /**
     * Get all Notes
     *
     * @return Note[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return static::all();
    }

    /**
     * Find note by id
     *
     * @param $id
     * @return mixed
     */
    public function findNote(int $id)
    {
        return static::find($id);
    }
}
