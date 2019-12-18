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
            'type_ID'   =>  '1',
        ]);
        DB::table('pokemontipos')->insert([
            'pokeNumber'   =>  '4',
            'type_ID'   =>  '2',
         ]);
         DB::table('pokemontipos')->insert([
            'pokeNumber'   =>  '7',
            'type_ID'   =>  '3',
         ]);
    }
}
