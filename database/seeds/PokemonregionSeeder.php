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
            'region_ID'   =>  '1',
         ]);
         DB::table('pokemonregions')->insert([
            'pokeNumber'   =>  '4',
            'region_ID'   =>  '1',
         ]);
         DB::table('pokemonregions')->insert([
            'pokeNumber'   =>  '7',
            'region_ID'   =>  '1',
         ]);
    }
}
