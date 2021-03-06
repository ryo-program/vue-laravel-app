<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body'
    ];

    public function posts()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
