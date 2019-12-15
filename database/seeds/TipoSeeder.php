<?php

use Illuminate\Database\Seeder;

class TipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos')->insert([
            'typeName'  =>  'Planta',
            'advID'  =>  '3',
            'dsvID'  =>  '2',
        ]);
        DB::table('tipos')->insert([
            'typeName'  =>  'Fuego',
            'advID'  =>  '1',
            'dsvID'  =>  '3',
        ]);
        DB::table('tipos')->insert([
            'typeName'  =>  'Agua',
            'advID'  =>  '2',
            'dsvID'  =>  '1',
        ]);
    }
}
