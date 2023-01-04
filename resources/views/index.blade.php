<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Games</title>
</head>

<body>
  <p><a href="{{ route('gameCreate') }}">Create a Game</a></p>
  <h1>Games</h1>
  <h2>Game's list</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>CATEGORY ID</th>
        <th>ACTIVE</th>
        <th>CREATED</th>
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($gamesList as $game )
        <tr>
          <td>{{ $game->id }}</td>
          <td><a href="{{ route('editGame', $game->id) }}">{{ $game->name }}</a></td>
          <td>{{ $game->category_id }}</td>
          <td>
            @if ($game->active)
            <span style="color:green" >Activo</span>
            @else
            <span style="color:red" >Inactivo</span>
            @endif
          </td>
          <td>{{ $game->created_at }}</td>
          <td><a href="{{ route('deleteGame', $game->id) }}">Delete</a></td>
        </tr>
        @empty
        <tr>
          <td>No games available</td>
        </tr>
      @endforelse
    </tbody>
  </table>
</body>

</html>