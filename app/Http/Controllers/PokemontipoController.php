<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PokemonTipo;

class PokemontipoController extends Controller
{
    public function index(){
        $pokemonTipo = PokemonTipo::all();
        return $pokemonTipo;
    }

    public function store(Request $request){
        $pokemonTipo = new Pokemon;

        $pokemonTipo->pokeNumber = $request->pokeNumber;
        $pokemonTipo->typeID = $request->typeID;
        $pokemon->save;
    }

    public function update(Request $request){
        $pokemonTipo = new Pokemon;

        $pokemonTipo->pokeNumber = $request->pokeNumber;
        $pokemonTipo->typeID = $request->typeID;
        $pokemonTipo->save;
    }

    public function destroy(Request $request){
        $pokemonTipo = new PokemonIpo;

        $pokemonTipo->delete($pokemonTipo->pokemonTypeID);
    }
}
