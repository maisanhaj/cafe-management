<?php

namespace Database\Seeders;

use App\Models\User;
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
            // UserSeeder::class,
             RoleSeeder::class,
            // ProductSeeder::class,
            // CategorySeeder::class,
            // OrderSeeder::class,
            // OrderitemSeeder::class,
        ]);
    }
}
