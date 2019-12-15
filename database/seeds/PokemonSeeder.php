<?php

use Illuminate\Database\Seeder;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pokemons')->insert([
            'pokeNumber'  =>  '1',
            'pokeName'  =>  'Bulbasaur',
            'pokeDesc'  =>  'Pokeon tipo planta que parece una tortuga',
            'pokeHeight'  =>  '0.5',
            'pokeWeight'  =>  '5',
            'sexo'  =>  'chico',
            'preEvolution'  =>  '0',
            'evolution'  =>  '2',
            'image'  =>  'bulbasaur.jpg',
            'activeGo'  =>  '0',
            'activeGoShiny'  =>  '0',
        ]);
        DB::table('pokemons')->insert([
            'pokeNumber'  =>  '4',
            'pokeName'  =>  'Charmander',
            'pokeDesc'  =>  'Pokemon tipo fuego que se parece a una lagartija',
            'pokeHeight'  =>  '0.4',
            'pokeWeight'  =>  '1.5',
            'sexo'  =>  'chica',
            'preEvolution'  =>  '0',
            'evolution'  =>  '5',
            'image'  =>  'charmander.jpg',
            'activeGo'  =>  '0',
            'activeGoShiny'  =>  '0',
        ]);
        DB::table('pokemons')->insert([
            'pokeNumber'  =>  '7',
            'pokeName'  =>  'Squirtle',
            'pokeDesc'  =>  'Pokemon tipo agua con foma de tortuga',
            'pokeHeight'  =>  '0.8',
            'pokeWeight'  =>  '10',
            'sexo'  =>  'chica',
            'preEvolution'  =>  '0',
            'evolution'  =>  '8',
            'image'  =>  'squirtle.jpg',
            'activeGo'  =>  '0',
            'activeGoShiny'  =>  '0',
        ]);
    }
}
