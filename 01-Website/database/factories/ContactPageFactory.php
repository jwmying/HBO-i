<?php

namespace Database\Factories;

use App\Models\ContactPage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactPageFactory extends Factory
{

    protected $model = ContactPage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'street' => $this->faker->streetName(),
            'number' => $this->faker->numberBetween(0, 999),
            'zip_code' => $this->faker->regexify('^[1-9][0-9]{3} ?(?!sa|sd|ss)[a-z]{2}$'),
            'city' => $this->faker->city(),
            'phone_number' => $this->faker->regexify('^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$'),
            'email' => $this->faker->safeEmail(),
            'linkedin' => 'https://www.linkedin.com/company/stichting-hbo-i/',
        ];
    }
}
