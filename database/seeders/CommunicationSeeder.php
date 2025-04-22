<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Communication;
use Illuminate\Database\Seeder;

class CommunicationSeeder extends Seeder
{
    public function run(): void
    {
        Communication::create([
            'name' => 'Ali Veli',
            'email' => 'ali@example.com',
            'phone_number' => '5551234567',
            'subject' => 'Kitap Talebi',
            'message' => 'Yeni bir kitap eklemek istiyorum.',
        ]);

        Communication::create([
            'name' => 'Ayşe Yılmaz',
            'email' => 'ayse@example.com',
            'phone_number' => '5559876543',
            'subject' => 'Şikayet',
            'message' => 'Kütüphane saatleri hakkında bilgi istiyorum.',
        ]);
    }
}
