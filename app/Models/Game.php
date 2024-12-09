<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    // Definir la tabla si el nombre no sigue la convención plural
    protected $table = 'games';  // Opcional si el nombre de la tabla es "games"

    // Definir los atributos que se pueden asignar masivamente
    protected $fillable = [
        'name',     // Nombre del juego
        'genre',    // Género del juego
        'rating',   // Calificación del juego
    ];

}