<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Produk::create([
            "name" => "mie ayam",
            "price" => 5000,
            "stok" => 20,
            "desc" => "gas pollll",
         ]);
        User::create([
            "name" => "bastian",
            "username" => "bastian",
            "role" => "siswa",
            "password" => "bastian",
         ]);
    }
}
