<?php

namespace Database\Seeders;

use App\Models\Members;
use Illuminate\Database\Seeder;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Members::factory()->create([
            'id' => '1',
            'name' => 'Avans Hogeschool',
            'image_name' => 'Avans Hogeschool.png',
            'redirect' => 'https://www.avans.nl/',
            'active' => '1',
            'slug' => 'avans-hogeschool',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '2',
            'name' => 'CHE Hogeschool',
            'image_name' => 'CHE Hogeschool.png',
            'redirect' => 'https://www.che.nl/',
            'active' => '1',
            'slug' => 'che-hogeschool',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '3',
            'name' => 'Zuyd Hogeschool',
            'image_name' => 'Zuyd Hogeschool.png',
            'redirect' => 'https://www.zuyd.nl/',
            'active' => '1',
            'slug' => 'zuyd-Hogeschool',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '4',
            'name' => 'NHL Hogeschool',
            'image_name' => 'NHL Hogeschool.png',
            'redirect' => 'https://www.nhlstenden.com/',
            'active' => '1',
            'slug' => 'nhl-hogeschool',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '5',
            'name' => 'Saxion',
            'image_name' => 'Saxion.png',
            'redirect' => 'https://www.saxion.nl/',
            'active' => '1',
            'slug' => 'saxion',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '6',
            'name' => 'HZ University',
            'image_name' => 'HZ University.png',
            'redirect' => 'https://hz.nl/',
            'active' => '1',
            'slug' => 'hz-university',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '7',
            'name' => 'Windesheim',
            'image_name' => 'Windesheim.png',
            'redirect' => 'https://www.windesheim.nl/',
            'active' => '1',
            'slug' => 'windesheim',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '8',
            'name' => 'Hogeschool van Amsterdam',
            'image_name' => 'Hogeschool van Amsterdam.png',
            'redirect' => 'https://www.hva.nl/',
            'active' => '1',
            'slug' => 'hogeschool-van-amsterdam',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '9',
            'name' => 'Hogeschool Rotterdam',
            'image_name' => 'Hogeschool Rotterdam.png',
            'redirect' => 'https://www.hogeschoolrotterdam.nl/',
            'active' => '1',
            'slug' => 'hogeschool-rotterdam',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '10',
            'name' => 'Hogeschool Leiden',
            'image_name' => 'Hogeschool Leiden.png',
            'redirect' => 'https://www.hsleiden.nl/',
            'active' => '1',
            'slug' => 'hogeschool-leiden',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '11',
            'name' => 'NHolland',
            'image_name' => 'NHolland.png',
            'redirect' => 'https://www.inholland.nl/',
            'active' => '1',
            'slug' => 'nholland',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '12',
            'name' => 'Hogeschool Utrecht',
            'image_name' => 'Hogeschool Utrecht.png',
            'redirect' => 'https://www.hu.nl/',
            'active' => '1',
            'slug' => 'hogeschool-utrecht',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '13',
            'name' => 'De Haagse School',
            'image_name' => 'De Haagse School.png',
            'redirect' => 'https://www.dehaagsehogeschool.nl/',
            'active' => '1',
            'slug' => 'de-haagse-school',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '14',
            'name' => 'Groningen',
            'image_name' => 'Groningen.png',
            'redirect' => 'https://www.hanze.nl/nld',
            'active' => '1',
            'slug' => 'groningen',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '15',
            'name' => 'Fontys',
            'image_name' => 'Fontys.png',
            'redirect' => 'https://fontys.nl/',
            'active' => '1',
            'slug' => 'fontys',
            'created_at' => now(),
        ]);
        Members::factory()->create([
            'id' => '16',
            'name' => 'HAN',
            'image_name' => 'HAN.png',
            'redirect' => 'https://www.han.nl/',
            'active' => '1',
            'slug' => 'han',
            'created_at' => now(),
        ]);
    }
}
