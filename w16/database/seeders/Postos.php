<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class Postos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postos')->insert(
			[
                'id'                => '1',
                'cidade_id'         => '1',
                'reservatorio' 	    => '20',
                'latitude' 		    => '900,33',
                'longitude'         => '1548,12',
            ],
            [
                'id'                => '2',            
                'cidade_id'         => '1',
                'reservatorio'  	=> '85',
                'latitude' 		    => '145900,33',
                'longitude'         => '562,12',
            ],
            [
                'id'                => '3',
                'cidade_id'         => '2',
                'reservatorio' 	    => '20',
                'latitude' 		    => '900,33',
                'longitude'         => '1548,12',
            ],
            [
                'id'                => '4',            
                'cidade_id'         => '2',
                'reservatorio' 	    => '85',
                'latitude' 		    => '145900,33',
                'longitude'         => '562,12',
            ]
        );
    }
    
}
