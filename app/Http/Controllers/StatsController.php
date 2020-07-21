<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Pokemon;

class StatsController extends Controller
{

    public function item($pokemonNumber) {

        // récupère le nombre total de pokémons; necessaire à la navigation
        $totalPokemonsNumber = count(Pokemon::all());

        // permet de récupérer un pokémon et les id de ses types
        $currentPokemon = Pokemon::find($pokemonNumber);

        // récupération des types du pokémon grâce aux relation des tables
        $currentPokemonTypes = $currentPokemon->types;

        return view(
            'stats.details',
            [
                'totalPokemonsNumber' => $totalPokemonsNumber,
                'currentPokemon' => $currentPokemon,
                'currentPokemonTypes' => $currentPokemonTypes
            ]
        );
    }

}
