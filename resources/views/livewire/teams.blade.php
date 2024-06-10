<div>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Plays</th>
                    <th>Played</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                     <tr>
                        <th>{{ $team->id }}</th>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->sumPlays() }}</td>
                        <td>{{ $team->played }}</td>
                        <td>{{ $team->score }}</td>
                     </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
