<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'npm' => '2301001',
            'nama' => 'Lalan'
        ]);

        Mahasiswa::create([
            'npm' => '2301002',
            'nama' => 'Rina'
        ]);

        Mahasiswa::create([
            'npm' => '2301003',
            'nama' => 'Dedi'
        ]);
    }
}