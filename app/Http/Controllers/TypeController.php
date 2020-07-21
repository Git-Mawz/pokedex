<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Pokemon;

class TypeController extends Controller
{

    public function list() {

        $allTypes = Type::all();

        return view(
            'type.list',
            [
                'allTypes' => $allTypes
            ]
        );

    }

    public function matchType($typeId) {

        // pour la nav
        $allTypeCount = count(Type::all());

        $type = Type::find($typeId);
        $pokemonToDisplay =$type->pokemons;
        return view(
            'type.match',
            [
                'type' => $type,
                'pokemonToDisplay' => $pokemonToDisplay,
                'allTypeCount' => $allTypeCount
            ]
        );


        // $type = Type::find($typeId);

        // $currentTypeName = $type->name;
        // $allPokemon = Pokemon::all();

        // $pokemonToDisplay = [];

        // foreach($allPokemon as $pokemon) {
        //     foreach($pokemon->types as $pokemonType){
        //         // dump($pokemonType->name);
        //         if ($pokemonType->name == $currentTypeName) {
        //             $pokemonToDisplay[] = $pokemon;
        //         }
        //     };
        // }

        // dump($pokemonToDisplay);

        // return view(
        //     'type.match',
        //     [
        //         'type' => $type,
        //         'pokemonToDisplay' => $pokemonToDisplay
        //     ]
        // );
    }

}
