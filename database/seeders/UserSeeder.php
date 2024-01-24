<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\produk;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "siswa",
            "username" => "siswa",
            "password" => Hash::make("siswa"),
            "role" => "siswa",
         ]);

         User::create([
            "name" => "admin",
            "username" => "admin",
            "password" => Hash::make("admin"),
            "role" => "admin",
         ]);

         User::create([
            "name" => "kantin",
            "username" => "kantin",
            "password" => Hash::make("kantin"),
            "role" => "kantin",
         ]);

         User::create([
            "name" => "bank",
            "username" => "bank",
            "password" => Hash::make("bank"),
            "role" => "bank",
         ]);

    }
}
