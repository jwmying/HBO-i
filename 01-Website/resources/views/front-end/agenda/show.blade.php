@extends('front-end.layouts.app')

@section('content')
    <section class="main" id="main">
        <!--content-->
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="main_content">
                            <div class="detail_blog">
                                <div class="blog_detail mb-4">
                                    <p class="blog-sub-heading"><span></span><a href="/">Home</a> / <a
                                            href="/domeinbeschrijving">Agenda</a> / <a
                                            href="">{{ $agendaItem->title }}</a>
                                    </p>
                                    <h2>{{ $agendaItem->title }}</h2>
                                    {!! $agendaItem->description !!}
                                    <p>
                                        <b>Locatie: {{ $agendaItem->location }}</b><br>
                                        <b>Aanvangst: {{ $agendaItem->getTime() }}</b><br>
                                        <b>Einde: {{ $agendaItem->getClosing() }}</b><br>
                                        <b>Organisator: {{ $agendaItem->organisator }}</b><br>
                                        @if ($agendaItem->link != null)
                                            <b>Link voor meer informatie: </b><a target="_blank"
                                                href="{{ $agendaItem->link }}">{{ $agendaItem->link }}</a>
                                        @endif
                                    </p>
                                    <x-add-to-calendar activityId="{{ $agendaItem->id }}" />
                                </div>
                            </div>
                            <div class="comment-form">
                                @if (session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="msg-heading"><span>Inschrijven activiteit</span></div>
                                <form method="post" action="{{ route('agenda.update', $agendaItem->id) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row my-form">
                                        <div class="col-12 col-md-6">
                                            <input name="name" type="text" required="required" class="form-control"
                                                placeholder="Naam">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input name="email" type="email" required="required" class="form-control"
                                                placeholder="Email">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input name="city" type="text" required="required" class="form-control"
                                                placeholder="Woonplaats">
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input name="school" type="text" required="required" class="form-control"
                                                placeholder="School">
                                        </div>
                                        <div class="col-12 text-center mt-2">
                                            <button class="btn pink-btn rounded-pill" type="submit">Inschrijven
                                                <span></span><span></span><span></span><span></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
