@php use Illuminate\Database\Eloquent\Builder; @endphp
<div>
  <div class="overflow-x-auto">
    <table class="table">
      <!-- head -->
      <thead>
        <tr>
          <th></th>
          @foreach ($teams as $team)
            <th>{{ $team->name }}</th>
          @endforeach
        </tr>
      </thead>
      <tbody>
        @foreach ($teams as $team1)
          <tr>
            <th>{{ $team1->name }}</th>
            @foreach ($teams as $team2)
              @if ($team1->id != $team2->id)
                @php
                  $match = \App\Models\Play::where(function (Builder $query) use ($team1, $team2) {
                      $query->where('team1_id', $team1->id)->where('team2_id', $team2->id);
                  })
                      ->orWhere(function (Builder $query) use ($team1, $team2) {
                          $query->where('team2_id', $team1->id)->where('team1_id', $team2->id);
                      })
                      ->get();

                @endphp
                <td>
                  @if ($match->count())
                    @foreach ($match as $eachMatch)
                      <span class="text-green-500">
                        {{ $eachMatch->game->name }}
                      </span>
                      <br>
                      {{ $eachMatch->team1_score }} - {{ $eachMatch->team2_score }}
                      <br>

                      @if ($eachMatch->team1_score > $eachMatch->team2_score || $eachMatch->team1_score < $eachMatch->team2_score)
                                <span class="text-amber-500 font-bold">
                        @if ($eachMatch->team1_score > $eachMatch->team2_score)
                          {{ $eachMatch->team1->name }}
                        @else
                          {{ $eachMatch->team2->name }}
                        @endif
                                </span>
                      @endif
                            <hr>
                    @endforeach
                  @else
                    ---
                  @endif
                </td>
              @else
                <td>
                  -
                </td>
              @endif
            @endforeach
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
