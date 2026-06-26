<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dosen;

class DosenSeeder extends Seeder
{
    public function run(): void
    {
        Dosen::create([
            'nidn' => '1111111111',
            'nama' => 'Budi Santoso'
        ]);

        Dosen::create([
            'nidn' => '2222222222',
            'nama' => 'Siti Nurhaliza'
        ]);

        Dosen::create([
            'nidn' => '3333333333',
            'nama' => 'Andi Wijaya'
        ]);
    }
}