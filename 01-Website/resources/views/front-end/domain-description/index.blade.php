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
                        <h4>Welkom bij de Domeinbeschrijving</h4>
                        <div class="crumbs">
                            <nav aria-label="breadcrumb" class="breadcrumb-items">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a
                                            href="{{ route('domeinbeschrijving.index') }}">Domeinbeschrijving</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset('front-end/img/domeinbeschrijving.jpg') }}" alt="Domeinbeschrijving kubus">
                </div>
            </div>
        </div>
    </section>
    <!--slider sec end-->
    <!--Blog start-->
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="standalone-area">
                            <div class="row standalone-row no-gutters d-flex align-items-baseline">
                                @foreach ($domainDescriptions as $domain)
                                    <div class="col-lg-4 stand-img-des mb-4">
                                        <div class="blog-image wow hover-effect fadeInLeft">
                                            @if ($domain->type == '3')
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{ route('domeinbeschrijving.show', $domain->slug) }}">
                                                            <img src={{ asset("storage/domain-description/images/$domain->image_name") }}
                                                                class="img-fluid rounded target-{{ $domain->target_audience }}">
                                                            <p class="sub-heading text-center">
                                                                NIEUWE PAGINA
                                                            </p>
                                                            <h2 class="gradient-text1">{{ $domain->title }}</h2>
                                                            <p>{{ substr(strip_tags($domain->description), 0, 100) }}...
                                                            </p>
                                                        </a>
                                                    </div>
                                                    <div class="col-12 align-self-end">
                                                        <a class="btn green-btn rounded-pill align-self-end"
                                                            href="{{ route('domeinbeschrijving.show', $domain->slug) }}">LEES
                                                            MEER
                                                            <span></span><span></span><span></span><span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @else
                                                <a href="{{ $domain->link }}">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <img src={{ asset("storage/domain-description/images/$domain->image_name") }}
                                                                class="img-fluid rounded target-{{ $domain->target_audience }}">
                                                        </div>
                                                        <div class="col-12">
                                                            <p class="sub-heading text-center">
                                                                @if ($domain->type == 1)
                                                                    DOORVERWIJZING
                                                                @else
                                                                    DOWNLOAD
                                                                @endif
                                                            </p>
                                                            <h2 class="gradient-text1">{{ $domain->title }}</h2>
                                                            <p>{{ substr(strip_tags($domain->description), 0, 100) }}...
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="btn green-btn rounded-pill"
                                                            href="{{ route('domeinbeschrijving.show', $domain->slug) }}">LEES
                                                            MEER
                                                            <span></span><span></span><span></span><span></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
