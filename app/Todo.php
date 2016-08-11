<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = ['title', 'user_id', 'completed'];

    public function getCompletedAttribute($value)
    {
        if ($value) {
            return true;
        }

        return false;
    }
}
