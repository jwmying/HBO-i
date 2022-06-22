@extends('front-end.layouts.app')

@section('content')
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="main_content text-center text-lg-left">
                            <div class="detail_blog">
                                <div class="blog_detail">
                                    <p class="blog-sub-heading text-center"><span></span><a href="/">Home</a> / <a
                                            href="/over">Over HBO-i</a></p>
                                    <h2>Over HBO-i</h2>
                                    <p>Stichting HBO-i is een netwerkorganisatie (opgericht in 1992) en geeft op nationaal
                                        en internationaal niveau mede richting aan belangrijke ontwikkelingen in
                                        hbo-ict-onderwijs. Zij vindt haar meerwaarde in de verbinding tussen aangesloten
                                        opleidingen en verbinding van die opleidingen met haar omgeving. We zijn
                                        gesprekspartner van hogescholen, bedrijven, brancheorganisaties en andere
                                        belanghebbende instanties in binnen- en buitenland. Een goed beeld van een
                                        ict-opleiding krijgen, zodat studenten een weloverwogen keuze maken, daar draait het
                                        bij de stichting HBO-i om.</p>
                                    <p>Stichting HBO-i ontwerpt en publiceert iedere vijf jaar de <a
                                            href="https://www.hbo-i.nl/domeinbeschrijving" target="_blank"
                                            rel="noopener noreferrer">Domeinbeschrijving HBO-i</a>. Hierin staan voor alle
                                        HBO-i-opleidingen de kwaliteitskaders beschreven, zodat onderwijsinstellingen,
                                        studenten en werkgevers precies weten wat zij wel en niet kunnen verwachten van een
                                        opleiding.</p>
                                    <p>In de huidige beleidsperiode (2018-2021) zet HBO-i zich in voor het bereiken van haar
                                        doelstelling (kwalitatief en kwantitatief versterken van het hbo-ict-onderwijs). Zie
                                        ook het huidige <a
                                            href="https://www.hbo-i.nl/wp-content/uploads/2020/11/HBO-I-Beleidsplan-2018-2021-.pdf">HBO-I
                                            Beleidsplan 2018 – 2021</a>. De doelstellingen van het HBO-i zijn al die jaren
                                        in essentie ongewijzigd gebleven en nog steeds actueel:</p>
                                    <ul>
                                        <li>Het onderhouden van relaties en samenwerken met het nationale en internationale
                                            beroepenveld in belang van de kwaliteit van het ict-onderwijs en het actueel
                                            houden van de beroeps- en opleidingsprofielen.</li>
                                        <li>Het vergroten van het rendement van het ict-onderwijs en het verhogen van de
                                            instroom. De gezamenlijke voorlichtingsactiviteiten zijn gericht op een juiste
                                            beeldvorming en helpen (toekomstige) studenten een weloverwogen keuze te maken.
                                            Het HBO-i streeft naar diversiteit en inclusiviteit in het algemeen en naar een
                                            verhoging van het aantal vrouwelijke ict-studenten in het bijzonder.</li>
                                        <li>Informatie-uitwisseling en kennisdeling tussen de opleidingen en vakgenoten uit
                                            het bedrijfsleven op vakinhoudelijk en onderwijskundig gebied.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        @livewire('sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
