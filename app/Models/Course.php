<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'short_title',
        'slug',
        'category',
        'overview',
        'description',
        'topics',
        'audience',
    ];

    protected $casts = [
        'topics' => 'array',
    ];
}