<?php

namespace Database\Seeders;

use App\Models\ContactPage;
use Database\Factories\ContactPageFactory;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ContactPage::factory()->create([
            'street' => 'Weteringschans',
            'number' => '223 BG',
            'zip_code' => '1017 XH',
            'city' => 'Amsterdam',
            'phone_number' => '020-626 17 82',
            'fax' => '020-627 03 22',
            'email' => 'info@hbo-i.nl',
            'linkedin' => 'https://www.linkedin.com/company/stichting-hbo-i/',
        ]);
    }
}
