<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonregionController extends Controller
{
    public function index(){
        $pokemonRegion = PokemonRegion::all();
        return $pokemonRegion;
    }

    public function store(Request $request){
        $pokemonRegion = new PokemonRegion;

        $pokemonRegion->pokeNumber = $request->pokeNumber;
        $pokemonRegion->regioniD = $request->regioniD;
        $pokemon->save;
    }

    public function update(Request $request){
        $pokemonTipo = new Pokemon;

        $pokemonTipo->pokeNumber = $request->pokeNumber;
        $pokemonTipo->regioniD = $request->regioniD;
        $pokemonTipo->save;
    }

    public function destroy(Request $request){
        $pokemonTipo = new PokemonIpo;

        $pokemonTipo->delete($pokemonTipo->pokemonRegionID);
    }
}
