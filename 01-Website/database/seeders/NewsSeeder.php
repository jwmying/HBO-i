<?php

namespace Database\Seeders;

use App\Models\NewsArticle;
use App\Models\NewsFilters;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = 'https://www.hbo-i.nl/wp-content/uploads/2022/05/denken-340x340.jpg';
        $contents = file_get_contents($url);
        $name = substr($url, strrpos($url, '/') + 1);
        Storage::put('news/images/'.$name, $contents);

        NewsArticle::factory()->create([
            'title' => 'TECHNOFILOSOFIE IN DE PRAKTIJK IS DENKEN ÉN DOEN',
            'sub_title' => 'Het boek ‘Technofilosofie in de Praktijk’ is geschreven door Jo-An Kamp, Huub Prüst en Wouter Lancee.',
            'image_name' =>  $name,
            'description' => '<h2><strong>DENKEN TIJDENS HET DOEN&nbsp;</strong></h2><p>Het boek is compact, maar biedt genoeg kaders om het denken over technologie te duiden. Het is belangrijk dat ethiek en technofilosofie verschuift van enkel beschouwen naar ook doen, stelt Kamp: “Wat je ziet in de geschiedenis van het denken over technologie, is een afstand tussen ethiek en praktijk. We zien wat technologie doet met de maatschappij, maar hebben er zelf niet direct invloed op. Meestal wordt er eerst wat gemaakt, en daarna vinden we er pas iets van. Technofilosofie in de praktijk brengen betekent dat je een kritische, ethische blik toevoegt aan het ontwikkelingsproces van technologie. Dus niet (alleen) achteraf, maar juist ook vooraf en tijdens het innovatieproces. Op deze manier kun je namelijk nog iets veranderen als dat nodig blijkt. Het gaat dus om denken tijdens het doen.” &nbsp;</p><h2><strong>MEDIATION THEORY&nbsp;</strong></h2><p>Het idee hierachter leunt op de Mediation Theory van Prof. Dr. Ir. Peter-Paul Verbeek, techniekfilosoof aan de Universiteit Twente. Zijn theorie stelt dat ethiek bepaald wordt door de innig verstrengelde relatie tussen mens en technologie, niet enkel door één van de twee. Technologie kan zelf geen morele keuzes maken, maar wel moraliteit belichamen. We moeten ons daarom niet de ja/nee vraag stellen of een technologie acceptabel is en of we deze moeten verbieden, maar de vraag hoe we deze technologie kunnen vormgeven op een manier die ons als maatschappij en als mensheid vooruithelpt. Kamp: “De insteek is niet om een oordeel te vellen, maar om meer bewustzijn in het hele proces te brengen. Welke effecten kan een technologie hebben in verschillende contexten, wat kan er gebeuren in de toekomst, hoe wenselijk zijn die effecten, wat accepteren we en wat kunnen we anders vormgeven? Wat voor soort wereld zijn we eigenlijk aan het bouwen en zouden we daar zelf in willen wonen?”</p><h2><strong>TECHNOFILOSOFIE &amp; MORAL DESIGN&nbsp;</strong></h2><p>Kamp maakt als onderzoeker deel uit van het lectoraat Moral Design Strategy, dat zich inzet om de menselijke maat terug de machine in te krijgen door burgers aan de tekentafel te zetten bij de ontwikkeling van nieuwe technologie. Kamp benadert het daarnaast ook van de andere kant: “Het is heel belangrijk dat iedereen die de impact van technologie voelt, hierover mee kan denken. Maar het moet van beide kanten komen, ook ontwerpers moeten nadenken over wat ze doen. Met technologie als AI krijgen zij een enorme verantwoordelijkheid. Waar ik me voor inzet is om ontwikkelaars te helpen kritische vragen te stellen en ethiek mee te nemen in hun proces.” &nbsp;&nbsp;</p><h2><strong>TECHNOLOGY IMPACT CYCLE TOOL&nbsp;</strong></h2><p>Hoe breng je dit nu in de praktijk? Daarvoor zijn tools nodig. Één daarvan werd ontwikkeld door een team Fontys onderzoekers, docenten en studenten: de Technology Impact Cycle Tool (TICT). Geen ‘ethiek-filter’, maar een framework om technologie te bevragen: “Je kunt niet elk effect van een innovatie voorzien, maar als het gaat om bias, privacy of security kun je er wel alert op zijn. De tool helpt om vanuit verschillende invalshoeken een technologie breed te evalueren. Er zit niet echt een moreel oordeel in de tool (wij bepalen niet wat goed of slecht is), de tool is vooral gemaakt om je te helpen de, voor jou juiste, ethische afwegingen te maken.” De TICT-tool is publiek toegankelijk via <a href="http://www.tict.io/">www.tict.io</a> en bevat niet alleen de tool, maar ook cursusmateriaal en verwijzingen naar andere toolkits. In het boek vind je naast de ontstaansgeschiedenis van de technofilosofie ook meer informatie over het ontstaan van deze tool.</p><p>&nbsp;</p><p><i>Het boek ‘Technofilosofie in de Praktijk’ is geschreven door Jo-An Kamp, Huub Prüst en Wouter Lancee. Het is gratis te downloaden in het </i><a href="https://www.fontys.nl/actueel/asset/1159069/ebook-technofilosofie-nl/"><i>Nederlands</i></a><i> en </i><a href="https://www.fontys.nl/actueel/asset/1159072/ebook-technofilosofie-en/"><i>Engels</i></a><i>.</i></p>',
            'status' => 'published',
            'target_audience' => 'teachers'
        ]);
        NewsArticle::factory()->count(7)->create();

        $result = DB::select('select id from news');
        
        foreach($result as $r){
            DB::insert("insert into news_has_filters (created_at, updated_at, news_id, news_filters_id) values (?, ?, ?, 1)", [ now(), now(), $r->id]);
            DB::insert("insert into news_has_filters (created_at, updated_at, news_id, news_filters_id) values (?, ?, ?, ?)", [ now(), now(), $r->id, rand(1,4)]);
        }
    }
}
