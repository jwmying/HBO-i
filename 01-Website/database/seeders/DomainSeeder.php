<?php

namespace Database\Seeders;

use App\Models\DomainDescription;
use Illuminate\Database\Seeder;

class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DomainDescription::factory()->count(13)->create();
    }
}
