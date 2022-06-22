@extends('front-end.layouts.app')

@section('content')
    <!--slider sec start-->
    <section id="slider-sec" class="slider-sec">
        <div class="overlay"></div>
        <div class="container">
            <div class="row position-relative slider-row">
                <div class="inner-overlay"></div>
                <div class="col-12 col-lg-6 d-flex align-items-center text-center text-lg-left">
                    <div class="inner-slider-content">
                        <h4>Welkom bij HBO-i</h4>
                        <div class="crumbs">
                            <nav aria-label="breadcrumb" class="breadcrumb-items">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="">Kennisbank</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('front-end/img/denken-340x340.jpg') }}">
                </div>
            </div>
        </div>
    </section>
    <!--slider sec end-->
    <br><br>
    
    <section class="team-sec position-relative" id="team-sec">
        <!--Left-->
        <div class="left-overlay"></div>
        <div class="container">
            <div class="row inner-team-sec padding-top padding-bottom">
                <div class="col-12 col-lg-4 text-center text-lg-left">
                    <div class="team-detail wow fadeInLeft">
                        <h4 class="heading">CONFERENCE<span>TOUR</span></h4>
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
                                        <img src="{{ asset('front-end/img/career-fair-crop.jpg') }}">
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">JOB & STUDENT EVENT</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="team-box">
                                    <div class="img-holder position-relative">
                                        <img src="{{ asset('front-end/img/image3-scaled.jpeg') }}">
                                    </div>
                                    <div class="team-info">
                                        <h4 class="team-name">KIJKJE IN DE KEUKEN</h4>
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
    <section>
        <!--Right-->
        <div class="testimonial-sec padding-top position-relative" id="testimonial-sec">
            <div class="right-overlay"></div>
            <div class="container">
                <div class="testimonial-area padding-top padding-bottom">
                    <div class="container">
                        <div class="row">
                            <div
                                class="col-12 col-lg-5 d-flex justify-content-center align-items-center text-center text-lg-left">
                                <div class="testimonial-details wow fadeInLeft">
                                    <h4 class="heading">DOMEIN- <span>BESCHRIJVING</span></h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 offset-lg-1">
                                <div class="testimonial-carousel wow fadeInRight">
                                    <div class="testimonial-box owl-carousel owl-theme">
                                        <div class="item text-center">
                                            <img src="{{ asset('front-end/img/denken-340x340.jpg') }}">
                                            <br>
                                            <h4 class="user-name">VIDEO'S</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                  <img src="{{ asset('front-end/img/hbo-i-domeinbeschrijving-model-3-nieuw.jpg') }}">
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
                                BLIJF MAANDELIJKS OP DE HOOGTE!
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
