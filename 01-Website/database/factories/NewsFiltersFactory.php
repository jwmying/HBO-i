<?php

namespace Database\Factories;

use App\Models\NewsFilters;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFiltersFactory extends Factory
{

    protected $model = NewsFilters::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
        ];
    }
}
