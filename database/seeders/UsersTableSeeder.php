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
                'club' => 'java',
                'created_at' => '2023-01-03 09:21:59',
                'email' => 'virtus225one@gmail.com',
                'email_verified_at' => NULL,
                'id' => 24,
                'name' => 'sminth lolipop',
                'niveau' => 'M1',
                'password' => '$2y$10$.VMeOCg7xIS8D5Rxqkbk/eGS1Z7FKa.A5QDXhLxYmNd3k6XEN/zUO',
                'pcc' => '500',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => '2023-01-05 17:50:46',
            ),
            1 => 
            array (
                'club' => 'python',
                'created_at' => '2023-01-04 06:19:01',
                'email' => 'nucleus@nucleus.studio',
                'email_verified_at' => NULL,
                'id' => 25,
                'name' => 'nucleus',
                'niveau' => 'M2',
                'password' => '$2y$10$TxBJEPRByUwtN.HR5F3Qd.JputyqHNBys0a4x4xyqx1jSrG7Qrniu',
                'pcc' => '150000000',
                'profileImage' => 'avator1.svg',
                'remember_token' => NULL,
                'updated_at' => '2023-01-05 17:50:11',
            ),
        ));
        
        
    }
}