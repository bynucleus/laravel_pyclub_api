<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RessourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ressources')->delete();
        
        \DB::table('ressources')->insert(array (
            0 => 
            array (
                'club' => 'python',
                'created_at' => '2022-02-02 12:51:15',
                'id' => 1,
                'lien' => 'https://python.developpez.com/faq/?page=Generalites',
                'titre' => 'faq python devoppez.com',
                'updated_at' => '2023-01-05 17:52:34',
            ),
        ));
        
        
    }
}