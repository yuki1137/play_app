<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body', 'author_name'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}



