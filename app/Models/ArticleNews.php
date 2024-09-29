<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleNews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        //'id'
        'name',
        'slug',
        'thumbnail',
        'content',
        'content',
        'category_id',
        'author_id',
        'is_featured',
    ];
}
