<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'vision',
        'images',
        'phone',
        'email',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'youtube',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
