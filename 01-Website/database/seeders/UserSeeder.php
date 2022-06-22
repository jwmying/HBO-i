<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'johndoe@gmail.com',
            'password' => '$2y$10$5R9rVX/m9ke1yPlPbBPpnesaAfDS/AYev8m3JLt49XzC.MUqdRrni'
        ]);
        User::factory()->count(5)->create();
    }
}
