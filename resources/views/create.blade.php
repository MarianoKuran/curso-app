<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create a Game</title>

  <style>
    form{
      display: flex;
      flex-direction: column;
      width: 200px;
      gap: 20px;
    }
    span{
      color: red;
    }
  </style>
</head>

<body>
  <p><a href="{{ route('gamesIndex') }}">Back to games list</a></p>

  <h1>Create a game!</h1>
  <form action="{{ route('createGame') }}" method="POST" >
    @csrf
    <input type="text" name="name_game" placeholder="Game name">
    @error('name_game')
      <span>{{ $message }}</span>
    @enderror
    <select name="category" id="category">

      @forelse ($categoriesList as $category )
      <option value="{{ $category->id }}">{{ $category->name }}</option>
      @empty

      @endforelse
    </select>
    <input type="submit" value="Create">
  </form>
</body>

</html>