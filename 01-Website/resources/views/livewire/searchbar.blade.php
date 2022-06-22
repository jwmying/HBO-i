<div>
    <div class="search-bar">
        <label class="sr-only" for="s">Search</label>
        <form wire:submit.prevent="search">
            <div class="input-group">
                <input class="field form-control" type="text" placeholder="Zoeken…" wire:model='searchTerm'
                    >
                <span class="input-group-append">
                    <button class="submit btn-search" name="submit" wire:click="search"><i
                            class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        @if (!empty($searchTerm))
            <div class="cat_sec mt-2">
                <ul>
                    @if (!empty($SearchResultsAgenda))

                        @foreach ($SearchResultsAgenda as $agendaItem)
                            <li>
                                <a href="{{ route('news.show', $agendaItem->slug) }}">{{ $agendaItem->title }}</a>
                                <span class="dots"></span>
                            </li>
                        @endforeach
                    @endif

                    @if (!empty($SearchResultsDomain))
                        @foreach ($SearchResultsDomain as $domainDescription)
                            <li>
                                <a href="{{ route('domeinbeschrijving.show', $domainDescription->slug) }}">{{ $domainDescription->title }}</a>
                                <span class="dots"></span>
                            </li>
                        @endforeach
                    @endif

                    @if (!empty($SearchResultsNews))
                        @foreach ($SearchResultsNews as $news)
                            <li>
                                <a href="{{ route('news.show', $news->slug) }}">{{ $news->title }}</a>
                                <span class="dots"></span>
                            </li>
                        @endforeach
                    @endif

                    @if (empty($SearchResultsNews) && empty($SearchResultsDomain) && empty($SearchResultsAgenda))
                        <p>Geen zoekresultaten gevonden....</p>
                    @endif
                </ul>
            </div>
        @endif
    </div>
</div>
