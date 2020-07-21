<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PokemonType;
use App\Models\Pokemon;



class Type extends Model {

    protected $table = 'type';
    protected $primaryKey = 'id';

    public function pokemons() {

        return $this->belongsToMany('App\Models\Pokemon');

    }

}
