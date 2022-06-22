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
                        <h4>{{ $domainDescription->title }}</h4>
                        <div class="crumbs">
                            <nav aria-label="breadcrumb" class="breadcrumb-items">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('domeinbeschrijving.index') }}">Domeinbeschrijving</a></li>
                                    <li class="breadcrumb-item active"><a>{{ $domainDescription->title }}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="{{ asset("storage/domain-description/images/$domainDescription->image_name") }}" alt="Domeinbeschrijving header">
                </div>
            </div>
        </div>
    </section>

    <!--main page content-->
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="main_content text-center text-lg-left">
                            <div class="detail_blog">
                                <div class="blog_detail">
                                    {{-- <p class="blog-sub-heading text-center"><span></span>{{ $domainDescription->title }}</p> --}}
                                    <h2>{{ $domainDescription->title }}</h2>

                                    {!! $domainDescription->description !!}

                                    <div class="row social">
                                        <div class="col-12 col-md-4 social-tags">
                                            <span class="in">
                                                <x-linked-in-button />
                                            </span>
                                        </div>
                                    </div>

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
    <!--main page content end-->
@endsection
