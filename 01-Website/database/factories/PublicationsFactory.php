<?php

namespace Database\Factories;

use App\Models\Publications;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class PublicationsFactory extends Factory
{

    protected $model = Publications::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $url = 'https://picsum.photos/420';
        $contents = file_get_contents($url);
        $name = $this->faker->uuid().'.jpg';
        Storage::put('publications/images/' . $name, $contents);
        Storage::put('publications/files/' . $name, $contents);

        return [
            'title' => $this->faker->sentence(5),
            'image_name' => $name,
            'file_name' => $name
        ];
    }
}
