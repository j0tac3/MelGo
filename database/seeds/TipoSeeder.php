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
            'adv_ID'  =>  '3',
            'dsv_ID'  =>  '2',
        ]);
        DB::table('tipos')->insert([
            'typeName'  =>  'Fuego',
            'adv_ID'  =>  '1',
            'dsv_ID'  =>  '3',
        ]);
        DB::table('tipos')->insert([
            'typeName'  =>  'Agua',
            'adv_ID'  =>  '2',
            'dsv_ID'  =>  '1',
        ]);
    }
}
