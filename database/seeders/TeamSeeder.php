<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()->createMany([
            [
                'name' => 'Bahrami',
                'points' => 0,
            ],
            [
                'name' => 'Arasteh',
                'points' => 0,
            ],
            [
                'name' => 'Hashemi',
                'points' => 0,
            ],
            [
                'name' => 'Porsiyah',
                'points' => 0,
            ],

        ]);
    }
}
