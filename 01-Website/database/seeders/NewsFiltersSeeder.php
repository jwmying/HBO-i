<?php

namespace Database\Seeders;

use App\Models\NewsFilters;
use Illuminate\Database\Seeder;

class NewsFiltersSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsFilters::factory()->create([
            'name'=>'seed data'
        ]);
        NewsFilters::factory()->count(3)->create();
    }
}
