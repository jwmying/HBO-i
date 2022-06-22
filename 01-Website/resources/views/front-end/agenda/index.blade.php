@extends('front-end.layouts.app')

@section('content')
    <!--slider sec end-->
    <section class="team-sec position-relative" id="team-sec">
        <!--Left-->
        <div class="left-overlay"></div>
        <div class="container">
            <div class="row inner-team-sec padding-top padding-bottom">
                <div class="col-12 col-lg-4 text-center text-lg-left">
                    <div class="team-detail wow fadeInLeft">
                        <h4 class="heading">AGENDA</h4>
                        <p class="text">
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="team-area wow fadeInRight">
                        <div class="row no-gutters team-carousel owl-carousel owl-theme">
                            <div class="item text-center">
                                <div class="team-box">
                                    <div class="img-holder position-relative">
                                        <img src="{{ asset('front-end/img/career-fair-crop.jpg') }}" alt="Workshop foto van HBO-i">
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">Kijkje in de Keuken bij Hogeschool Windesheim</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="team-box">
                                    <div class="img-holder position-relative">
                                        <img src="{{ asset('front-end/img/image3-scaled.jpeg') }}" alt="Foto van de HBO-i keuken">
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">HBO-ICT Job & Student Event</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="team-nav team-prev" id="team-prev">
                            <i class="fas fa-angle-left"></i>
                        </a>
                        <a href="javascript:void(0);" class="team-nav team-next" id="team-next">
                            <i class="fas fa-angle-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-sec news-letter-color" id="about-sec">
        <div class="about-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 about-area padding-top padding-bottom text-center text-lg-left">
                    <div class="about-content wow fadeInRight">
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <div class="about-inner-content">
                                    <h4 class="heading">ACTIVITEITEN</h4>
                                    <p class="text">
                                        HBO-i zorgt voor informatieoverdracht tussen vakinhoudelijke en onderwijskundige opleidingen. Denk aan het 
                                        uitwisselen van kennis, ervaring en onderwijsproducten tussen docenten onderling en vakgenoten uit het
                                         bedrijfsleven. Maar ook het actueel houden van de beroeps- en opleidingsprofielen. Met als doel het 
                                         ict-onderwijs in Nederland te verbeteren en de instroom van nieuw talent te verhogen.
                                    </p>
                                    {{-- <a href="#" class="btn anim-btn rounded-pill">&#x2709; SCHRIJF JE IN
                                        <span></span><span></span><span></span><span></span>
                                    </a> --}}
                                </div>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <img src="{{ asset('front-end/img/shutterstock_1486446758.jpg') }}" alt="Kalender met projectteam">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <!--Blog start-->
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="standalone-area">
                            <div class="row standalone-row no-gutters d-flex align-items-baseline">
                                @foreach ($agendaItems as $item)
                                    <div class="col-lg-4 stand-img-des mb-4">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            <a href="{{ route('agenda.show', $item->slug) }}">
                                                <img src="{{ asset("storage/agenda/images/$item->image_name") }}" alt="Agenda item">
                                            </a>
                                            <p class="sub-heading text-center">{{ strtoupper($item->getDateFormattedLocalized()) }}</p>
                                            <h6 class="text-overflow">{{ strtoupper($item->title) }}</h6>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- END HEADING SECTION -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--News letter start-->
    <section class="about-sec news-letter-color" id="about-sec">
        <div class="about-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                    <div class="purple-overlay"></div>
                    <div class="row no-gutters wow fadeInLeft">
                        <div class="col-12 services text-center">
                            <div class="service-card">
                                <div class="mb-3 mr-2">
                                    <img src="{{ asset('front-end/img/hbo-i-domeinbeschrijving-model-3-nieuw.jpg') }}" alt="Domeinbeschrijving kubus">
                                </div>
                                <h4 class="card-heading">HBO-I</h4>
                                <p class="text">
                                    DOMEIN- <br> BESCHRIJVING
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                    <div class="about-content wow fadeInRight">
                        <div class="about-inner-content">
                            <h4 class="heading">HBO-I NIEUWSBRIEF</h4>
                            <p class="text">
                                Wilt u op de hoogte blijven van de laatste ontwikkelingen rondom HBO-i? Meldt u dan aan
                                voor onze gratis nieuwsbrief.
                            </p>
                            <a href="#" class="btn anim-btn rounded-pill">&#x2709; AANMELDEN NIEUWSBRIEF
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br>
    <!--News letter End-->
@endsection
