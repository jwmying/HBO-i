<div>
    <div class="row">
        <div class="col-lg-8 mx-auto">

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
            @if ($errors->any())
                {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif

            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title">Aanpassen van nieuwsartikel</h4>
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

                        <img src="{{ asset('storage/news/images/' . $this->old_image) }}" width="500" />
                    </div>
                    
                    <div wire:ignore class="form-group">
                        <label>Nieuwsartikel inhoud</label>

                        <x-html-editor placeholder="Maak een nieuwsartikel inhoud">
                            {{ $this->description }}
                        </x-html-editor>
                    </div>

                    <div wire:ignore class="form-group">
                        <label>Nieuwsartikel filters</label>

                        <x-news-filter-selection :filters="$this->filters" :selected="$this->news_filters" />
                    </div>

                    <div wire:ignore class="form-group">
                        <label>Nieuwsartikel doelgroep</label>

                        <x-article-target-audience-selection wire:model="target_audience"
                            :options="$this->targetAudienceOptions" :selected="$this->target_audience" />
                    </div>
                </div>

                <div class="card-footer">
                    <button wire:click="update" class="btn btn-primary">Opslaan</button>

                    @if ($newsArticle->isDraft())
                        <button wire:click="update('published')" class="btn btn-success">Publiceren</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>