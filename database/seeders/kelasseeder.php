<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kelasseeder extends Seeder
{
    public function run(): void
    {
        kelas::create(['nama_kelas' => 'kelas A']);
        kelas::create(['nama_kelas' => 'Kelas B']);
        kelas::create(['nama_kelas' => 'kelas C']);
    }
}
