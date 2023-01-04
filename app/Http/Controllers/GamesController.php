<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Category;
use Illuminate\Http\Request;

class GamesController extends Controller
{

  public function index()
  {
    // $gamesList = array('Fifa22', 'GTA San Andreas', 'Uncharted', 'Need For Speed', 'Call Of Duty');
    $gamesInDb = Game::orderBy('id', 'desc')->get();
    return view('index', ['gamesList' => $gamesInDb]);
  }

  public function create()
  {
    $categoriesInDb = Category::all();
    return view('create', ['categoriesList' => $categoriesInDb]);
  }
  public function detail($name_game, $category = "none")
  {
    $date = now();
    return view('show', ['nameGame' => $name_game, 'category' => $category, 'date' => $date]);
  }
  public function storeGame(Request $req)
  {

    $req->validate([
      'name_game'=>'required|min:3'
    ]);

    $game = new Game;
    $game->name = $req->name_game;
    $game->category_id = $req->category;
    $game->active = 1;
    $game->save();
    
    return redirect()->route('gamesIndex');
  }
  public function editGame($game_id)
  {
    $game = Game::find($game_id);
    $categoriesInDb = Category::all();
    return view('edit', ['categoriesList' => $categoriesInDb, 'game'=> $game]);
  }

  public function updateGame(Request $req)
  {
    $game = Game::find($req->game_id);
    $game->name = $req->name_game;
    $game->category_id = $req->category;
    $game->active = 1;
    $game->save();
    
    return redirect()->route('gamesIndex');
  }
  public function deleteGame($game_id)
  {
    $game = Game::find($game_id);
    $game->delete();

    return redirect()->route('gamesIndex');
  }
}
