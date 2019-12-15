<?php

use Illuminate\Database\Seeder;

class PokemonregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemonregions')->insert([
            'pokeNumber'   =>  '1',
            'regionID'   =>  '1',
         ]);
         DB::table('pokemonregions')->insert([
            'pokeNumber'   =>  '4',
            'regionID'   =>  '1',
         ]);
         DB::table('pokemonregions')->insert([
            'pokeNumber'   =>  '7',
            'regionID'   =>  '1',
         ]);
    }
}
