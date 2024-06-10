<h1>Tournament Table</h1>
<table>
    <thead>
        <tr>
            <th>Team Name</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->points }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
