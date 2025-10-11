<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        //Menambahkan user admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'), 
            'role' => 'admin', 
        ]);

        // menambahkan user mahasiswa
        User::create([
            'name' => 'Mahasiswa',
            'email' => 'mhs@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'mahasiswa',
        ]);
    }
}
