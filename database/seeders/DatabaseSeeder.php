<?php

namespace Database\Seeders;

use App\Models\UserLaravel;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CargoSeeder::class,
            DepartamentoSeeder::class,
            UserSeeder::class
        ]);
    }
}
