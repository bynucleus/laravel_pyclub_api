<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ListePresencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('liste_presences')->delete();
        
        
        
    }
}