<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::factory()->createMany([
            [
                'name' => 'Pantomim'
            ],
            [
                'name' => 'Football'
            ],
            [
                'name' => 'Dart'
            ],
            [
                'name' => 'Janga'
            ],

        ]);
    }
}
