<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function index(){
        $pokemon = Pokemon::all();
        return $pokemon;
    }

    public function store(Request $request){
        $pokemon = new Pokemon;

        $pokemon->pokeNumber = $request->pokeNumber;
        $pokemon->pokeName = $request->pokeName;
        $pokemon->pokeDesc = $request->pokeDesc;
        $pokemon->pokeHeight = $request->pokeHeight;
        $pokemon->pokeWeight = $request->pokeWeight;
        $pokemon->sexo = $request->sex;
        $pokemon->preEvolution = $request->preEvolution;
        $pokemon->evolution = $request->evolution;
        $pokemon->image = $request->image;
        $pokemon->activeGo = $request->activeGo;
        $pokemon->activeGoShiny = $request->activeGoShiny;
        $pokemon->save;
    }

    public function update(Request $request){
        $pokemon = new Pokemon;

        $pokemon->pokeNumber = $request->pokeNumber;
        $pokemon->pokeName = $request->pokeName;
        $pokemon->pokeDesc = $request->pokeDesc;
        $pokemon->pokeHeight = $request->pokeHeight;
        $pokemon->pokeWeight = $request->pokeWeight;
        $pokemon->sexo = $request->sex;
        $pokemon->preEvolution = $request->preEvolution;
        $pokemon->evolution = $request->evolution;
        $pokemon->image = $request->image;
        $pokemon->activeGo = $request->activeGo;
        $pokemon->activeGoShiny = $request->activeGoShiny;
        $pokemon->save;
    }

    public function destroy(Request $request){
        $pokemon = new Pokemon;

        $pokemon->delete($pokemon->regionID);
    }
}
