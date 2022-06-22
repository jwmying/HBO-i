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
        $this->call([
            NewsFiltersSeeder::class,
            UserSeeder::class,
            MembersSeeder::class,
            AgendaSeeder::class,
            NewsSeeder::class,
            ContactSeeder::class,
            DomainSeeder::class,
            PublicationSeeder::class,
        ]);
    }
}
