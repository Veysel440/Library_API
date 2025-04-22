<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_name',
        'writer',
        'publishing_house',
        'publication_date',
        'category',
        'isbn_no',
        'page_number',
        'book_content',
        'book_picture',
        'book_file',
    ];

    protected $casts = [
        'publication_date' => 'date',
    ];
}
