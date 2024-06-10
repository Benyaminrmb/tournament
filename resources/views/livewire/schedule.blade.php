<div>
    <h1>Tournament Schedule</h1>

    <ul>
        @forelse ($upcomingPlays as $play)

            <li @class([
    'text-green-500' => $play->team1_score > 0 || $play->team2_score > 0,
])>
                {{ $play->team1_name }} vs {{ $play->team2_name }} ({{ \App\Models\Game::find($play->game_id)->name }})
            </li>
        @empty
            <li>No upcoming matches found.</li>
        @endforelse
    </ul>
</div>
