<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 */
class Comment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
      'text',
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
     * Get note
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function note()
    {
        return $this->hasOne('App\Note');
    }

    /**
     * Find comment by id
     *
     * @param $id
     * @return mixed
     */
    public function findComment(int $id)
    {
        return static::find($id);
    }
}
