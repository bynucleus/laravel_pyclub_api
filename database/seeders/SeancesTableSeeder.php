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
                'club' => 'web',
                'created_at' => '2022-02-02 20:25:28',
                'date' => '2022-12-31',
                'id' => 1,
                'titre' => NULL,
                'updated_at' => '2023-01-05 17:51:53',
            ),
            1 => 
            array (
                'club' => 'java',
                'created_at' => '2022-02-02 20:25:46',
                'date' => '2022-12-31',
                'id' => 2,
                'titre' => NULL,
                'updated_at' => '2023-01-05 17:51:38',
            ),
            2 => 
            array (
                'club' => 'python',
                'created_at' => NULL,
                'date' => '2022-12-31',
                'id' => 3,
                'titre' => NULL,
                'updated_at' => '2023-01-05 17:51:26',
            ),
        ));
        
        
    }
}