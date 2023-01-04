<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit a Game</title>
</head>

<body>
  <p><a href="{{ route('gamesIndex') }}">Back to games list</a></p>

  <h1>Edit a game!</h1>
  <form action="{{ route('updateGame') }}" method="POST">
    @csrf

    <input type="hidden" name="game_id" value="{{ $game->id }}">
    <input type="text" name="name_game" value="{{ $game->name }}" placeholder="Game name">
    <select name="category" id="category">

      @forelse ($categoriesList as $category )
      <option value="{{ $category->id }}" @if($category->id === $game->category_id) selected @endif >{{ $category->name }}</option>
      @empty

      @endforelse
    </select>
    <input type="submit" value="Create">
  </form>
</body>

</html>