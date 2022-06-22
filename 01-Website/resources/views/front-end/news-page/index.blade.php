@extends('front-end.layouts.app')

@section('content')
    <!--main page content-->
    <!--slider sec start-->
    <section id="slider-sec" class="slider-sec">
        <div class="overlay"></div>
        <div class="container">
            <div class="row position-relative slider-row">
                <div class="inner-overlay"></div>
                <div class="col-12 col-lg-6 d-flex align-items-center text-center text-lg-left">
                    <div class="inner-slider-content">
                        <h4>Blijf op de hoogte!</h4>
                        <div class="crumbs">
                            <nav aria-label="breadcrumb" class="breadcrumb-items">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="news">Nieuws</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('front-end/img/contactpage-standalone.jpg') }}" alt="Notulist werkt achter de laptop">
                </div>
            </div>
        </div>
    </section>
    <!--slider sec end-->
    @livewire('news-articles')
    <!--main page content end-->
    
@endsection
