<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class Cidades extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cidades')->insert(
			[
                'id'                => '1',
                'nome_da_cidade' 	=> 'Porto Alegre',
                'latitude' 		    => '900,33',
                'longitude'         => '1548,12',
            ],
            [
                'id'                => '2',
                'nome_da_cidade' 	=> 'Caxias',
                'latitude' 		    => '145900,33',
                'longitude'         => '562,12',
            ]
        );
    }
}