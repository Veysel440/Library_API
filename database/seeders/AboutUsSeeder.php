<?php

namespace Database\Seeders;

use App\Models\About_us;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    public function run(): void
    {
        About_Us::create([
            'title' => 'LibraryHub Hakkında',
            'text' => 'LibraryHub, kitap severler için bir topluluk kütüphanesidir.',
            'vision' => 'Herkese açık bir bilgi merkezi olmak.',
            'images' => ['library1.jpg', 'library2.jpg'],
            'phone' => '5551234567',
            'email' => 'info@libraryhub.com',
            'address' => '123 Kütüphane Sokak, İstanbul',
            'facebook' => 'https://facebook.com/libraryhub',
            'twitter' => 'https://twitter.com/libraryhub',
            'instagram' => 'https://instagram.com/libraryhub',
            'youtube' => 'https://youtube.com/libraryhub',
        ]);
    }
}
