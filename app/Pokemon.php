<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $primaryKey = 'pokeNumber';
    public $incrementing = false;
}
