<?php

// app/Http/Controllers/GameController.php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    // Mostrar todos los juegos
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    // Mostrar un juego específico
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return response()->json($game);
    }

    // Crear un nuevo juego
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'rating' => 'required|numeric|min:0|max:10',
        ]);

        $game = Game::create([
            'name' => $request->name,
            'genre' => $request->genre,
            'rating' => $request->rating,
        ]);

        return response()->json($game, 201);
    }

    // Actualizar un juego
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255',
            'genre' => 'string|max:255',
            'rating' => 'numeric|min:0|max:10',
        ]);

        $game = Game::findOrFail($id);
        $game->update($request->all());

        return response()->json($game);
    }

    // Eliminar un juego
    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return response()->json(['message' => 'Game deleted successfully']);
    }
}
