@extends('front-end.layouts.app')
@include('cookie-consent::index')
@section('content')
    <!--SLider sec start-->
    <section class="slider-area">
        <div class="bg-overlay"></div>
        <div class="container position-relative">
            <div class="inner-bg-overlay"></div>
            <div class="row">
                <div class="slider-detail col-12 col-lg-4 text-center text-lg-left wow fadeInLeft align-middle"
                    data-wow-delay=".8s">
                    <div class="slider-slide align-middle">
                        <div class="slider-inner-content innercontentdown">
                            <h4 class="slide-heading">WELKOM BIJ<span>HBO-i</span></h4>
                            <p class="slide-text">
                                Stichting HBO-i ontwerpt en publiceert iedere vijf jaar de Domeinbeschrijving HBO-i. Hierin staan voor alle 
                                HBO-i-opleidingen de kwaliteitskaders beschreven, zodat onderwijsinstellingen, studenten en werkgevers precies 
                                weten wat zij wel en niet kunnen verwachten van een opleiding.
                            </p>
                            <a href="#about-sec" class="btn anim-btn rounded-pill scroll">LEES MEER
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8 wow fadeInRight" data-wow-delay=".8s">
                    <iframe
                        src="https://player.vimeo.com/video/456165468?background=1&amp;muted=0&amp;autoplay=1&amp;loop=1&amp;autopause=0"
                        frameborder="0" allow="autoplay;" height="847"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!--SLider sec End-->
    <!--About sec start-->
    <section class="about-sec" id="about-sec">
        <div class="about-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 services-area padding-top padding-bottom">
                    <div class="purple-overlay"></div>
                    <div class="row no-gutters wow fadeInLeft">
                        <div class="col-12 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-users" style="color: #dd167d !important"></i>
                                </div>
                                <h4 class="card-heading" style="color: #dd167d !important">Studenten</h4>
                            </div>
                        </div>
                        <div class="col-12 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-user" style="color: #00abd6 !important"></i>
                                </div>
                                <h4 class="card-heading" style="color: #00abd6 !important">Leden</h4>
                            </div>
                        </div>
                        <div class="col-12 services text-center">
                            <div class="service-card">
                                <div class="icon-holder">
                                    <i class="lni lni-graduation" style="color: #dc9c52 !important"></i>
                                </div>
                                <h4 class="card-heading" style="color: #dc9c52 !important">Docenten</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 about-area padding-top padding-bottom text-center text-lg-left">
                    <div class="about-content wow fadeInRight">
                        <div class="about-inner-content">
                            <h4 class="heading">WIJ ZIJN <span>HBO-i</span></h4>
                            <p class="text">
                                Stichting HBO-i is een netwerkorganisatie (opgericht in 1992) en geeft op nationaal en 
                                internationaal niveau mede richting aan belangrijke ontwikkelingen in hbo-ict-onderwijs. Zij vindt 
                                haar meerwaarde in de verbinding tussen aangesloten opleidingen en verbinding van die opleidingen 
                                met haar omgeving. We zijn gesprekspartner van hogescholen, bedrijven, brancheorganisaties en andere 
                                belanghebbende instanties in binnen- en buitenland. Een goed beeld van een ict-opleiding krijgen, 
                                zodat studenten een weloverwogen keuze maken, daar draait het bij de stichting HBO-i om. 
                            </p>
                            
                            <a href="#about-sec" class="btn anim-btn rounded-pill">BEKIJK MEER
                                <span></span><span></span><span></span><span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About sec End-->

    <!--Team sec start-->
    <br>
    <section class="team-sec position-relative" id="team-sec">
        <div class="left-overlay"></div>
        <div class="container">
            <div class="row inner-team-sec padding-top padding-bottom">
                <div class="col-12 col-lg-4 text-center text-lg-left">
                    <span></span><span></span>
                    <div class="team-detail wow fadeInLeft">
                        <h4 class="heading">HBO-I LEDEN</span></h4>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="team-area wow fadeInRight">
                        <div class="row no-gutters team-carousel owl-carousel owl-theme" style="background-color: #ffff;">

                            @foreach ($members as $m)
                                <div class="item text-center">
                                    <div class="team-box">
                                        <div class="img-holder position-relative">
                                            <a href="{{ $m->redirect }}" target="_blank">
                                                <img src="{{ asset('storage/members/images/' . $m->image_name) }}"
                                                    class="img" alt="{{ $m->image_name }}">
                                            </a>
                                            <div class="overlay d-flex justify-content-center align-items-center"
                                                style="z-index: -99;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
    <!--Team sec End-->

    <!--Blogs section start-->
    <section class="blog-sec" id="blog-sec">
        <div class="left-overlay"></div>
        <div class="container position-relative">
            <div class="blog-inner-overlay"></div>
            <div class="row blog-area">
                <div class="col-12 col-lg-5 d-flex align-items-center text-center text-lg-left">
                    <div class="blog-detail wow fadeInLeft">
                        <h4 class="heading">NIEUWSBRIEF</h4>
                        <p class="text">
                            Wilt u op de hoogte blijven van de laatste ontwikkelingen rondom HBO-i? Meldt u dan aan
                            voor onze gratis nieuwsbrief.
                        </p>
                        <a class="btn anim-btn rounded-pill" href="creative-startup/standard-blog.html">AANMELDEN
                            NIEUWSBRIEF
                            <span></span><span></span><span></span><span></span>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="blog-img wow fadeInRight">
                        <img src="{{ asset('front-end/img/shutterstock_346701608-340x340.jpg') }}" alt="Nieuwsbrief foto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blogs section end-->
@endsection
