<?php

use Illuminate\Database\Seeder;

class PokemontipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemontipos')->insert([
            'pokeNumber'   =>  '1',
            'typeID'   =>  '1',
        ]);
        DB::table('pokemontipos')->insert([
            'pokeNumber'   =>  '4',
            'typeID'   =>  '2',
         ]);
         DB::table('pokemontipos')->insert([
            'pokeNumber'   =>  '7',
            'typeID'   =>  '3',
         ]);
    }
}
