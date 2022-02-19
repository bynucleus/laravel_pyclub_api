<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeancesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seances')->delete();
        
        \DB::table('seances')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date' => '15-01-22',
                'created_at' => '2022-02-02 20:25:28',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'date' => '29-01-22',
                'created_at' => '2022-02-02 20:25:46',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'date' => '05-02-2022',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}