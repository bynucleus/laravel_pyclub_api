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
                'club' => NULL,
                'created_at' => '2022-02-02 20:25:28',
                'date' => '15-01-22',
                'id' => 1,
                'titre' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'club' => NULL,
                'created_at' => '2022-02-02 20:25:46',
                'date' => '29-01-22',
                'id' => 2,
                'titre' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'club' => NULL,
                'created_at' => NULL,
                'date' => '05-02-2022',
                'id' => 3,
                'titre' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}