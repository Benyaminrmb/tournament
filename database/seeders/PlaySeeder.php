<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Play;
use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = Team::all();
        $games = Game::all();

        foreach ($games as $game) {
            $teamCount = count($teams);
            $roundRobin = [];

            // Generate all possible team pairings for the current game
            for ($i = 0; $i < $teamCount; $i++) {
                for ($j = $i + 1; $j < $teamCount; $j++) {
                    $roundRobin[] = [$teams[$i]->id, $teams[$j]->id];
                }
            }

            // Shuffle the pairings to randomize the order
            shuffle($roundRobin);

            // Insert matches for each team pairing
            foreach ($roundRobin as $pairing) {
                [$team1Id, $team2Id] = $pairing;
                Play::factory()->create([
                    'game_id' => $game->id,
                    'team1_id' => $team1Id,
                    'team2_id' => $team2Id,
                ]);
            }
        }
    }
}
