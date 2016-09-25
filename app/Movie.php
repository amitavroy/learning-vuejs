<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /**
     * Declare fields which can be mass assigned.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'director', 'year', 'language'
    ];
}
