<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        Menu::create([
            'menu_name' => 'Ana Sayfa',
            'url' => '/',
        ]);

        Menu::create([
            'menu_name' => 'Kitaplar',
            'url' => '/books',
        ]);

        Menu::create([
            'menu_name' => 'Hakkımızda',
            'url' => '/about-us',
        ]);
    }
}
