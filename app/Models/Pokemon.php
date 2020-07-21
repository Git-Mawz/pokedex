<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PokemonType;
use App\Models\Type;


class Pokemon extends Model {

    protected $table = 'pokemon';
    protected $primaryKey = 'number';

    public function types() {

        return $this->belongsToMany('App\Models\Type');

    }


}
