<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';
    protected $primaryKey = 'pokeNumber';
    public $incrementing = false;
}
