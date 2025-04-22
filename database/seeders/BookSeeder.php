<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'book_name' => '1984',
            'writer' => 'George Orwell',
            'publishing_house' => 'Can Yayınları',
            'publication_date' => '1949-06-08',
            'category' => 'Dystopian',
            'isbn_no' => '9789750718533',
            'page_number' => 352,
            'book_content' => 'A dystopian novel about totalitarianism.',
            'book_picture' => '1984.jpg',
            'book_file' => '1984.pdf',
        ]);

        Book::create([
            'book_name' => 'Sefiller',
            'writer' => 'Victor Hugo',
            'publishing_house' => 'İş Bankası Kültür Yayınları',
            'publication_date' => '1862-01-01',
            'category' => 'Historical Fiction',
            'isbn_no' => '9789754589276',
            'page_number' => 1488,
            'book_content' => 'A story of redemption and social injustice.',
            'book_picture' => 'sekiller.jpg',
            'book_file' => 'sekiller.pdf',
        ]);
    }
}
