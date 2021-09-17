<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateKrakenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('krakens')->insert([
            [
                'nom' => 'Kraken Seed',
                'age' => 43,
                'taille' => 53,
                'poids' => 212,

            ]
        ]);

        $krakensIDs = DB::table('krakens')->pluck('id');

       DB::table('tentacules')->insert([
            [
                'nom' => 'tentacule KS1',
                'PV' =>432 ,
                'FOR' => 321,
                'DEX' =>321 ,
                'CON' => 321,
                'kraken_id' =>$krakensIDs [0],
            ],
            [
                'nom' => 'tentacule KS2',
                'PV' =>432 ,
                'FOR' => 321,
                'DEX' =>321 ,
                'CON' => 321,
                'kraken_id' => $krakensIDs  [0],
            ]
        ]);

    }
}
