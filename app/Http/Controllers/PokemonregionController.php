<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PokemonRegion;

class PokemonregionController extends Controller
{
    // Function to read all registers from PokemonRegion's table.
    public function index(){
        $pokemonRegion = PokemonRegion::all();
        return $pokemonRegion;
    }
    // Function to insert a register from PokemonRegion's table.
    public function store(Request $request){
        $pokemonRegion = new PokemonRegion;

        $pokemonRegion->pokeNumber = $request->pokeNumber;
        $pokemonRegion->regioniD = $request->regioniD;
        $pokemon->save;
    }
    // Function to update a register from PokemonRegion's table.
    public function update(Request $request){
        $pokemonTipo = new Pokemon;

        $pokemonTipo->pokeNumber = $request->pokeNumber;
        $pokemonTipo->regioniD = $request->regioniD;
        $pokemonTipo->save;
    }
    // Function to delete a register from PokemonRegion's table.
    public function destroy(Request $request){
        $pokemonTipo = new PokemonIpo;

        $pokemonTipo->delete($pokemonTipo->pokemonRegionID);
    }
}
