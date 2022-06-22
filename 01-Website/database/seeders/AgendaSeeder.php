<?php

namespace Database\Seeders;

use App\Models\Agenda;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://www.hbo-i.nl/wp-content/uploads/2021/10/Kijkjeindekeukenfoto-340x340.jpg';
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        Storage::put('agenda/images/'.$name, $contents);

        Agenda::factory()->create([
            'title' => 'KIJKJE IN DE KEUKEN BIJ HOGESCHOOL WINDESHEIM',
            'image_name' =>  $name,
            'description' => 'ICT-docenten uit het hbo opgelet: Het Kijkje in de Keuken december bij Hogeschool Windesheim is uitgesteld naar 8 juni 2022. Je kunt je via deze link aanmelden.

            Bij Windesheim in Almere en Zwolle studeren ruim 24.000 studenten, honderden cursisten en werken ruim 2.200 medewerkers. Met een populatie van 2351 deeltijd- en voltijdstudenten is de opleiding HBO-ICT de een-na-grootste opleiding van Windesheim. Windesheim wil actief bijdragen aan een inclusieve en duurzame samenleving, door waardevolle professionals op te leiden van en door het uitvoeren van praktijkgericht onderzoek. De hogeschool ziet het als zijn maatschappelijke opdracht om iedereen die daarvoor het talent heeft, de mogelijkheid te bieden hoger onderwijs te volgen. Ongeacht afkomst, vooropleiding, achtergrond of leeftijd. Elke student met talent verdient de kans zich ten volste te ontwikkelen.
            
             
            
            Deelname is kosteloos en je kunt je via deze link aanmelden. Voor een overzicht van het programma, zie Programma Kijkje in de Keuken.
            
            ',
            'location' => 'Campus 2, Zwolle',
            'start_time' => '2022-06-08 12:00:00',
            'end_time' => '2022-06-08 14:00:00',
            'organisator' => 'stichting HBO-i',
            'link' => 'https://www.hbo-i.nl/aanmelden-kijkje-in-de-keuken/',
        ]);
        Agenda::factory()->count(7)->create();
    }
}
