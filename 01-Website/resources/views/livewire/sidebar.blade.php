<div>
    <div class="row">
        <div class="col-12">
            <div class="side_tags">
                @livewire('searchbar')
            </div>
            <div class="popular_posts">
                <h4 class="text-center text-lg-left">Recente artikelen</h4>
                @foreach ($recentArticles as $article)
                    <a href="{{ route('news.show', $article->slug) }}">
                        <div class="media-box row box-hover">
                            <div class="col-5 box-img bg-image hover-zoom">
                                <img src="{{ asset('storage/news/images/' . $article->image_name) }}" alt="Recente artikel">
                            </div>
                            <div class="col-7 box-detail">
                                <h2>{{ $article->title }}</h2>
                                <p> {{ $article->getFormattedDate() }} <br>
                                    Door <span>HBO-i</span></p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
