<?php

namespace App\Livewire;

use App\Models\Game;
use App\Models\Play;
use App\Models\Team;
use Livewire\Attributes\Title;
use Livewire\Component;

class Schedule extends Component
{
    #[Title('Schedule')]
    public mixed $teams;
    public mixed $games;
    public mixed $upcomingPlays;

    public function __construct()
    {
        $this->teams = Team::all();
        $this->games = Game::all();

        $this->upcomingPlays = Play::query()
            ->with(['team1', 'team2', 'game'])
            ->join('teams as team1', 'plays.team1_id', '=', 'team1.id')
            ->join('teams as team2', 'plays.team2_id', '=', 'team2.id')

            ->select('team1.name as team1_name', 'team2.name as team2_name', 'plays.game_id','plays.team1_score','plays.team2_score')
            ->get();

    }
    public function render()
    {
        return view('livewire.schedule');
    }
}
