<div>
    <div class="row mt-5">
        <div class="col-xl-8 col-lg-8 col-sm-12 col-12">

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('success') }}
                </div>
            @elseif(Session::has('failed'))
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    {{ Session::get('failed') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif

            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title">Maak nieuw nieuwsartikel</h4>
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <label>Titel</label>
                        <input type="text" class="form-control" wire:model="title" placeholder="Vul een titel in" required>
                    </div>

                    <div class="form-group">
                        <label>Subtitel</label>
                        <input type="text" class="form-control" wire:model="sub_title" placeholder="Vul een subtitel in" required>
                    </div>
                    
                    <div class="form-group">
                        <label>Omslag foto</label>
                        <input type="file" class="form-control" wire:model="new_image" required>
                    </div>

                    <div wire:ignore class="form-group">
                        <label>Nieuwsartikel inhoud</label>

                        <x-html-editor placeholder="Maak een nieuwsartikel inhoud" />
                    </div>

                    <div wire:ignore class="form-group">
                        <label>Nieuwsartikel filters</label>

                        <x-news-filter-selection :filters="$filters" />
                    </div>

                    <div class="form-group">
                        <label>Nieuwsartikel doelgroep</label>

                        <x-article-target-audience-selection wire:model="target_audience" :options="$targetAudienceOptions" />
                    </div>
                </div>

                <div class="card-footer">

                    @if ($newsArticle && $newsArticle->isDraft())
                        <button wire:click="update('published')" class="btn btn-success">Publiceren</button>
                        <button wire:click="update" class="btn btn-primary">Opslaan</button>
                        <a class="btn btn-info" href="{{ route('news.show', $newsArticle->slug) }}" target="_blank">Concept bekijken</a>
                    @else
                        <button wire:click="store('published')" class="btn btn-success">Publiceren</button>
                        <button wire:click="store('draft')" class="btn btn-primary">Opslaan als concept</button>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>