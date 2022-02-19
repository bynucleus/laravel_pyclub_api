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
                'id' => 1,
                'titre' => 'faq python devoppez.com',
                'lien' => 'https://python.developpez.com/faq/?page=Generalites',
                'created_at' => '2022-02-02 12:51:15',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}