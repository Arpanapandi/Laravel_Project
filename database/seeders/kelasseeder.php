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
        kelas::create(['nama_kelas' => 'ASE-24-001']);
        kelas::create(['nama_kelas' => 'AIS-24-001']);
        kelas::create(['nama_kelas' => 'OAA-24-001']);
    }
}
