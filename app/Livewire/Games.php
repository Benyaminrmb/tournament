<?php

namespace App\Livewire;

use App\Models\Game;
use Livewire\Attributes\Title;
use Livewire\Component;

class Games extends Component
{
    #[Title('Games')]
    public mixed $games;

    public function __construct()
    {
        $this->games = Game::all();
    }

    public function render()
    {
        return view('livewire.games');
    }
}
