<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Game;
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

        User::factory()->create([
            'name' => 'Test user',
            'email' => 'user@example.com',
        ]);

        Game::create([
            'name' => 'God of War',
            'genre' => 'Action',
            'rating' => 9.9,
        ]);

        Game::create([
            'name' => 'The Last of Us',
            'genre' => 'Survival',
            'rating' => 9.5,
        ]);

        Game::create([
            'name' => 'Uncharted',
            'genre' => 'Adventure',
            'rating' => 9,
        ]);
    }
}
