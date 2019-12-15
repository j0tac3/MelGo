<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'regionName'    =>  'Kanto',
            'regionDesc'    =>  'Kanto es la primera region del mundo Pokèmon'
        ]);
        DB::table('regions')->insert([
            'regionName'    =>  'Johto',
            'regionDesc'    =>  'Johto es la segunda region del mundo Pokèmon'
        ]);
    }
}
