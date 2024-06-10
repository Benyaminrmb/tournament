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
        $this->call(PlaySeeder::class);
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'estT User',
            'email' => 'test@example.com',
        ]);*/


    }
}
