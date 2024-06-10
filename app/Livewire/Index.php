<?php

namespace App\Livewire;

use App\Models\Game;
use App\Models\Play;
use App\Models\Team;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
    #[Title('Tournament')]
    public mixed $teams;
    public mixed $games;
    public mixed $plays;

    public function __construct()
    {
        $this->teams = Team::all();
        $this->games = Game::all();

        $this->plays = Play::query()
            ->join('teams as team1', 'plays.team1_id', '=', 'team1.id')
            ->join('teams as team2', 'plays.team2_id', '=', 'team2.id')
            ->select('team1.name as team1_name', 'team2.name as team2_name', 'plays.team1_score', 'plays.team2_score')
            ->get();

    }
    public function render()
    {
        return view('livewire.index');
    }
}
