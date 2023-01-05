<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('clubs')->delete();
        
        \DB::table('clubs')->insert(array (
            0 => 
            array (
                'code' => 'python',
                'created_at' => '2023-01-05 17:46:56',
                'description' => NULL,
                'id' => 1,
                'titre' => 'Club Python',
                'updated_at' => '2023-01-05 17:46:56',
            ),
            1 => 
            array (
                'code' => 'java',
                'created_at' => '2023-01-05 17:47:06',
                'description' => NULL,
                'id' => 2,
                'titre' => 'Club Java',
                'updated_at' => '2023-01-05 17:47:06',
            ),
            2 => 
            array (
                'code' => 'web',
                'created_at' => '2023-01-05 17:47:35',
                'description' => NULL,
                'id' => 3,
                'titre' => 'Club web',
                'updated_at' => '2023-01-05 17:47:35',
            ),
            3 => 
            array (
                'code' => 'arduino',
                'created_at' => '2023-01-05 17:47:52',
                'description' => NULL,
                'id' => 4,
                'titre' => 'Club Arduino',
                'updated_at' => '2023-01-05 17:47:52',
            ),
        ));
        
        
    }
}