<?php

namespace Database\Factories;

use App\Models\NewsArticle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class NewsArticleFactory extends Factory
{

    protected $model = NewsArticle::class;

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
        Storage::put('news/images/'.$name, $contents);

        $description = $this->faker->paragraph(10).'<br/><br/>';
        $description .= $this->faker->paragraph(20).'<br/><br/>';
        $description .= $this->faker->paragraph(5).'<br/><br/>';

        return [
            'title' => $this->faker->sentence(5),
            'sub_title' => $this->faker->sentence(8),
            'image_name' =>  $name,
            'description' => $description,
            'status' => 'published',
            'target_audience' => $this->faker->randomElement(['students' ,'teachers', 'members'])
        ];
    }
}
