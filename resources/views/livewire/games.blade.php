<div>
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($games as $game)
                    <tr>
                        <th>{{ $game->id }}</th>
                        <td>{{ $game->name }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
