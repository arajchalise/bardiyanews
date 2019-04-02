<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    $fillable = [
        'title',
        'description',
        'category',
        'priority',
        'photo',
    ]
}
