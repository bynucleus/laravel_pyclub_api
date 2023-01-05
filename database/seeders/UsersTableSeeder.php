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
                'club' => 'web',
                'created_at' => NULL,
                'email' => 'anelda@gmail.com',
                'email_verified_at' => '2022-02-01 16:08:23',
                'id' => 1,
                'name' => 'anelda',
                'niveau' => 'M1',
                'password' => 'anelda',
                'pcc' => '2000000',
                'profileImage' => 'avator3.svg',
                'remember_token' => NULL,
                'updated_at' => '2022-02-03 19:19:36',
            ),
            1 => 
            array (
                'club' => 'web',
                'created_at' => '2022-02-03 19:36:22',
                'email' => 'fofanazeguelamyriam@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'Fofana',
                'niveau' => 'L1',
                'password' => 'sminth',
                'pcc' => '8500',
                'profileImage' => 'avator3.svg',
                'remember_token' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'club' => NULL,
                'created_at' => '2022-02-02 22:55:23',
                'email' => 'eliekoffi420@gmail.com',
                'email_verified_at' => NULL,
                'id' => 3,
                'name' => 'koffi',
                'niveau' => 'L1',
                'password' => '$2y$10$NQrMI4fMz8tvsVJBh5TYI.2c0.y2.oJUcW/xE30XOzgy1J3LqD/Cu',
                'pcc' => '1500',
                'profileImage' => 'avator2.svg',
                'remember_token' => NULL,
                'updated_at' => '2022-02-03 18:46:54',
            ),
            3 => 
            array (
                'club' => NULL,
                'created_at' => '2022-02-03 20:20:20',
                'email' => 'ariel2scheneee@gmail.com',
                'email_verified_at' => NULL,
                'id' => 13,
                'name' => 'N\'Guessan',
                'niveau' => 'L1',
                'password' => 'ddd',
                'pcc' => '5170',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'club' => NULL,
                'created_at' => NULL,
                'email' => 'ktilonon11@gmail.com',
                'email_verified_at' => NULL,
                'id' => 14,
                'name' => 'Konaté',
                'niveau' => 'L1',
                'password' => 'jgh',
                'pcc' => '10000',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'club' => 'java',
                'created_at' => NULL,
                'email' => 'vapormax225@gmail.com',
                'email_verified_at' => NULL,
                'id' => 15,
                'name' => 'Koné',
                'niveau' => 'L2',
                'password' => 'hjgj',
                'pcc' => '11850',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'club' => 'web',
                'created_at' => '2023-01-03 09:21:59',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'id' => 24,
                'name' => 'sminth lolipop',
                'niveau' => 'm2',
                'password' => '$2y$10$.VMeOCg7xIS8D5Rxqkbk/eGS1Z7FKa.A5QDXhLxYmNd3k6XEN/zUO',
                'pcc' => '50',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => '2023-01-03 09:21:59',
            ),
            7 => 
            array (
                'club' => NULL,
                'created_at' => '2023-01-04 06:19:01',
                'email' => 'lolipop@bynucleus.com',
                'email_verified_at' => NULL,
                'id' => 25,
                'name' => 'lolipop',
                'niveau' => NULL,
                'password' => '$2y$10$TxBJEPRByUwtN.HR5F3Qd.JputyqHNBys0a4x4xyqx1jSrG7Qrniu',
                'pcc' => NULL,
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => '2023-01-04 06:19:01',
            ),
        ));
        
        
    }
}