<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    public function run(): void
    {
        Slider::create([
            'main_title' => 'Hoş Geldiniz!',
            'sub_title' => 'LibraryHub ile kitap dünyasını keşfedin.',
            'image' => 'slider1.jpg',
        ]);

        Slider::create([
            'main_title' => 'Yeni Kitaplar',
            'sub_title' => 'En son eklenen kitapları inceleyin.',
            'image' => 'slider2.jpg',
        ]);
    }
}
