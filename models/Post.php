<?php

namespace App\Models;

use Next\Database\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'content',
    ];
}
