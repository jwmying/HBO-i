<?php

namespace Database\Factories;

use App\Models\DomainDescription;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class DomainDescriptionFactory extends Factory
{

    protected $model = DomainDescription::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(5);

        $url = 'https://picsum.photos/420';
        $contents = file_get_contents($url);
        $name = $this->faker->uuid().'.jpg';
        
        Storage::put('domain-description/images/' . $name, $contents);

        $targetAudience = $this->faker->randomElement(['students' ,'teachers', 'members']);

        $random = rand(0, 2);

        if ($random == 0) {
            $description = $this->faker->paragraph(10) . '<br/><br/>';
            $description .= $this->faker->paragraph(20) . '<br/><br/>';
            $description .= $this->faker->paragraph(5) . '<br/><br/>';
            return [
                'title' => $title,
                'image_name' => $name,
                'description' => $description,
                'type' => 3,
                'target_audience' => $targetAudience
            ];
        } else if ($random == 1) {
            return [
                'title' => $title,
                'image_name' => $name,
                'link' => $this->faker->url(),
                'type' => 1,
                'target_audience' => $targetAudience
            ];
        } else {
            Storage::put('domain-description/files/' . $name, $contents);
            return [
                'title' => $title,
                'image_name' => $name,
                'link' => $name,
                'type' => 2,
                'target_audience' => $targetAudience
            ];
        }
    }
}
