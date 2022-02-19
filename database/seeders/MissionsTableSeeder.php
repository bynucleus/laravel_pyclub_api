<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('missions')->delete();
        
        \DB::table('missions')->insert(array (
            0 => 
            array (
                'id' => 2,
                'classe' => 'Z',
                'description' => 'il s\'agit dans ce projet de réaliser un script ouvrant l\'invite de commande avec une couleur de texte précisé par l\'utilisateur',
                'lien' => 'https://nucleus.eblackci.com/page.unamed/document?id=88',
                'debut' => '25-01-22',
                'fin' => '28-01-22 23h23',
                'pcc' => '1100',
                'created_at' => '2022-02-01 16:23:27',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}