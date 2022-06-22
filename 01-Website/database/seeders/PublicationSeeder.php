<?php

namespace Database\Seeders;

use App\Models\Publications;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publications::factory()->count(10)->create();
    }
}
