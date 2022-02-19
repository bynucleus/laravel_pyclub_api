<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'anelda',
                'prenom' => 'lolipop',
                'pcc' => '2000000',
                'niveau' => 'M1',
                'email' => 'anelda@gmail.com',
                'profileImage' => 'avator3.svg',
                'email_verified_at' => '2022-02-01 16:08:23',
                'password' => 'anelda',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => '2022-02-03 19:19:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fofana',
                'prenom' => 'Zéguela Myriam Yasmine',
                'pcc' => '8500',
                'niveau' => 'L1',
                'email' => 'fofanazeguelamyriam@gmail.com',
                'profileImage' => 'avator3.svg',
                'email_verified_at' => NULL,
                'password' => 'sminth',
                'remember_token' => NULL,
                'created_at' => '2022-02-03 19:36:22',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'koffi',
                'prenom' => 'Daniel Elie',
                'pcc' => '1500',
                'niveau' => 'L1',
                'email' => 'eliekoffi420@gmail.com',
                'profileImage' => 'avator2.svg',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NQrMI4fMz8tvsVJBh5TYI.2c0.y2.oJUcW/xE30XOzgy1J3LqD/Cu',
                'remember_token' => NULL,
                'created_at' => '2022-02-02 22:55:23',
                'updated_at' => '2022-02-03 18:46:54',
            ),
            3 => 
            array (
                'id' => 13,
                'name' => 'N\'Guessan',
                'prenom' => 'Ariel Ezechias',
                'pcc' => '5170',
                'niveau' => 'L1',
                'email' => 'ariel2scheneee@gmail.com',
                'profileImage' => 'avator1.svg',
                'email_verified_at' => NULL,
                'password' => 'ddd',
                'remember_token' => NULL,
                'created_at' => '2022-02-03 20:20:20',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 14,
                'name' => 'Konaté',
                'prenom' => 'Tilonon',
                'pcc' => '10000',
                'niveau' => 'L1',
                'email' => 'ktilonon11@gmail.com',
                'profileImage' => 'avator1.svg',
                'email_verified_at' => NULL,
                'password' => 'jgh',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 15,
                'name' => 'Koné',
                'prenom' => 'Mohamed',
                'pcc' => '11850',
                'niveau' => 'L2',
                'email' => 'vapormax225@gmail.com',
                'profileImage' => 'avator1.svg',
                'email_verified_at' => NULL,
                'password' => 'hjgj',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}