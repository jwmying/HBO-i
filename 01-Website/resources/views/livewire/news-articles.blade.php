<div>
    <section class="main">
        <div class="blog-content padding-top padding-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tags_sec"
                            style="text-align:center; margin-left: auto; width: 100%; color:white; background-color: #dc9c52;">
                            <h4 style="color: white" class="text-center">Filters</h4>
                            <div class="tags text-center">
                                @foreach ($news_filters as $nf)
                                    <button wire:click="changeFilter({{ $nf->id }})"
                                        class="rounded-pill text-white purple-btn btn btn-filter {{ $actual_filter == $nf->id ? 'active' : '' }}"
                                        style="margin-bottom: 10px;margin-left: 5px;">{{ $nf->name }}</button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!--News artical -->
                    <div class="col-12">
                        <div class="row no-gutters mb-3">

                            @foreach ($news_articles as $na)
                                <a href="{{ route('news.show', $na->slug) }}">
                                    <div class="col-lg-4 stand-img-des mb-3" style="padding: 10px">
                                        <div class="blog-image wow hover-effect fadeInLeft text-center">
                                            <img class="img img-fluid target-{{ $na->target_audience }}"
                                                src="{{ asset("storage/news/images/$na->image_name") }}"
                                                style="min-height:416px;" alt="Nieuws item">
                                            <p class="sub-heading text-center"
                                                style="margin-top: 10px;margin-bottom: 0px">
                                                Nieuws:</p>
                                            <h6>{{ $na->title }}</h6>
                                            <p>{{ substr($na->sub_title, 0, 50) }}...</p>
                                            <a class="btn green-btn rounded-pill mt-3"
                                                href="{{ route('news.show', $na->slug) }}">LEES MEER
                                                <span></span><span></span><span></span><span></span>
                                            </a>
                                        </div>

                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>

                    <div class="col-12">
                        {{ $news_articles->links() }}
                    </div>

                </div>

            </div>
        </div>
    </section>
</div>
