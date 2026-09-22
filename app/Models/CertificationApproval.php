<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationApproval extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image',
        'display_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}