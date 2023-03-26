<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $filltable = [
        'category_id',
        'name',
        'slug',
        'description',
        'yt_frame',
        'meta_title',
        'meta_keyword',
        'status',
        'created_by'
    ];
}
