<?php

namespace Database\Seeders;

use App\Models\masterAlamat;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        KelasSeeder::class,
        MahasiswaSeeder::class,
        UserSeeder::class, 
        MasterAlamatSeeder::class,
    ]);
}

}
