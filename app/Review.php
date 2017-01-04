<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'title',
        'body',
        'stars',
    ];

    /**
     * A comment belongs to a user
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * A comment belongs to a roaster
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roaster()
    {
        return $this->belongsTo('App\Roaster');
    }


}
