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
        // User::factory(10)->create();

        if (env('APP_ENV') === 'production') {
            User::factory()->create([
                'name' => 'Admin',
                'email' => 'contact@jawaileopardsafaribooking.in',
                'password' => bcrypt('jawaileopardsafaribooking@733991'),
            ]);
        } else {
            User::factory()->create([
                'name' => 'Admin',
                'email' => 'user@demo.com',
                'password' => bcrypt('password'),
            ]);
        }

    }
}
