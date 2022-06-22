<?php

namespace Database\Factories;

use App\Models\Agenda;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class AgendaFactory extends Factory
{

    protected $model = Agenda::class;

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
        Storage::put('agenda/images/'.$name, $contents);

        $description = $this->faker->paragraph(10).'<br/><br/>';
        $description .= $this->faker->paragraph(20).'<br/><br/>';
        $description .= $this->faker->paragraph(5).'<br/><br/>';

        return [
            'title' => $this->faker->sentence(5),
            'image_name' =>  $name,
            'description' => $description,
            'location' => $this->faker->streetAddress(),
            'start_time' => $this->faker->dateTimeBetween('-1 week', '+1 week'),
            'end_time' => $this->faker->dateTimeBetween('+1 week', '+8 days'),
            'organisator' => $this->faker->company(),
            'link' => null,
        ];
    }
}
