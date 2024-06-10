<?php

namespace App\Livewire;

use App\Models\Play;
use App\Models\Team;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\Title;
use Livewire\Component;

class Teams extends Component
{
    #[Title('Teams')]
    public mixed $teams;

    public function __construct()
    {
        $this->teams = Team::all();
        foreach ($this->teams as $key=>$team) {
            $plays=$this->plays($team);
            $this->teams[$key]['played'] = count($plays);
            $this->teams[$key]['score'] =$this->score($team);
        }
    }

    public function score($team)
    {
        $a=Play::where('team1_id',$team->id)
            ->sum('team1_score');
        $b=Play::where('team2_id',$team->id)
            ->sum('team2_score');
        return $a+$b;
    }

    public function plays($team): \Illuminate\Database\Eloquent\Collection|array|\LaravelIdea\Helper\App\Models\_IH_Play_C
    {
       return Play::query()
            ->join('teams as team1', 'plays.team1_id', '=', 'team1.id')
            ->join('teams as team2', 'plays.team2_id', '=', 'team2.id')

            ->where(function (Builder $query) use ($team) {
                $query->where('team1.id', $team->id)
                    ->orWhere('team2.id',$team->id);
            })
            ->where(function (Builder $query) {
                $query->whereNotNull('team1_score')
                    ->orWhereNotNull('team2_score');
            })
            ->get();
    }
    public function render()
    {
        return view('livewire.teams');
    }
}
