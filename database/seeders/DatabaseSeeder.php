<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(RessourcesTableSeeder::class);
        $this->call(MissionsTableSeeder::class);
        $this->call(SeancesTableSeeder::class);
        $this->call(NotesTableSeeder::class);
        $this->call(ListePresencesTableSeeder::class);
        $this->call(ClubsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
    }
}
