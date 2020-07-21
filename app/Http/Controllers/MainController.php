<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

class MainController extends Controller
{
    /**
     * HTTP method: GET
     * URL : /
     */
    public function list() {

        $pokemons = Pokemon::all();

        return view(
            'main.list',
            [
                'pokemons' => $pokemons
            ]
        );
    }
}
