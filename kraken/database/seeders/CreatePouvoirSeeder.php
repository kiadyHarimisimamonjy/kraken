<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreatePouvoirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pouvoirs')->insert([

            [

                'max' => 12,

                'nom' => 'blast',

            ],
            [

                'max' => 21,

                'nom' => 'plague',

            ],
            [

                'max' => 3,

                'nom' => 'mind control',

            ],
            [

                'max' => 12,

                'nom' => ' ink fog',

            ],
            [

                'max' => 15,

                'nom' => 'force shield',

            ],
            [

                'max' => 12,

                'nom' => 'regeneration',

            ],

        ]);
    }
}
