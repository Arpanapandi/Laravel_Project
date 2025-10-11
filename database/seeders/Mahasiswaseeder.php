<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Arpan',
            'nim' => '124525',
            'kelas_id' => 1,
        ]);

        Mahasiswa::create([
            'nama' => 'Dewi',
            'nim' => '124526',
            'kelas_id' => 2,
        ]);
    }
}
