<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author'
    ];

    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
}