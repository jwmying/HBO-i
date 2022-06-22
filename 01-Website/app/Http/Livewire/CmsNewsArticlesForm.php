<?php

namespace App\Http\Livewire;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Models\NewsArticle;
use App\Models\NewsFilters;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class CmsNewsArticlesForm extends Component
{
    use WithFileUploads;

    public $newsArticle;
    public $filters;
    public $targetAudienceOptions;

    public $title;
    public $sub_title;
    public $description;
    public $news_filters;
    public $target_audience;
    public $status;

    public $old_image;
    public $new_image;

    public $editMode;

    public function mount($newsArticle = null, $editMode = false)
    {
        $this->newsArticle = $newsArticle;
        $this->editMode = $editMode;

        if ($newsArticle) {
            $this->title = $newsArticle->title;
            $this->sub_title = $newsArticle->sub_title;
            $this->old_image = $newsArticle->image_name;
            $this->description = $newsArticle->description;
            $this->target_audience = $newsArticle->target_audience;
            $this->status = $newsArticle->status;

            $this->news_filters = $newsArticle->filters->pluck('name')->all();
        }
    }

    public function render()
    {
        $this->filters = NewsFilters::all();
        $this->targetAudienceOptions = NewsArticle::getEnum('TargetAudience');

        return view('livewire.cms-news-articles-form');
    }

    public function store($status)
    {
        $this->validate([
            'title' => 'required|max:255',
            'sub_title' => 'required|max:255',
            'new_image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'description' => 'required',
            'target_audience' => ['required', Rule::in($this->targetAudienceOptions)]
        ]);

        $this->newsArticle = new NewsArticle();
        $this->newsArticle->title = $this->title;
        $this->newsArticle->sub_title = $this->sub_title;

        $this->new_image->storeAs('news/images', $this->new_image->getClientOriginalName());
        $this->newsArticle->image_name = $this->new_image->getClientOriginalName();

        $this->newsArticle->description = $this->description;
        $this->newsArticle->target_audience = $this->target_audience;
        $this->newsArticle->status = $status;
        $this->newsArticle->slug = SlugService::createSlug(NewsArticle::class, 'slug', $this->title);
        
        $this->newsArticle->save();

        if(!empty($this->news_filters)) {

            foreach ($this->news_filters as $filter_name) {

                $filter = NewsFilters::firstOrCreate(
                    ['name' => $filter_name]
                );

                $this->newsArticle->filters()->attach($filter);
            }
        }

        if(!$this->newsArticle->isDraft()) {
            return redirect(route('admin.news.index'))->with('sucess', 'Succesvol een nieuw nieuwsartikel aangemaakt');
        }
    }

    public function update($status = null)
    {
        $this->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'description' => 'required',
            'target_audience' => ['required', Rule::in($this->targetAudienceOptions)]
        ]);

        $this->newsArticle->title = $this->title;
        $this->newsArticle->sub_title = $this->sub_title;
        $this->newsArticle->description = $this->description;
        $this->newsArticle->target_audience = $this->target_audience;

        // Update news article image if a new image is uploaded
        if ($this->new_image) {
            $this->new_image->storeAs('news/images', $this->new_image->getClientOriginalName());
            $this->newsArticle->image_name = $this->new_image->getClientOriginalName();
        }

        // Update news article status if a new status is given
        if($status) {
            $this->newsArticle->status = $status;
        }

        // Update news article slug if a new title is given
        if($this->newsArticle->title != $this->title) {
            $this->newsArticle->slug = SlugService::createSlug(NewsArticle::class, 'slug', $this->title);
        }
        
        $this->newsArticle->save();

        if(!empty($this->news_filters)) {

            foreach ($this->news_filters as $filter_name) {

                $filter = NewsFilters::firstOrCreate([
                    'name' => $filter_name
                ]);

                // Attach filter to news article if not already attached
                if(!$this->newsArticle->filters->contains($filter)) {
                    $this->newsArticle->filters()->attach($filter);
                }
            }
        }

        foreach ($this->filters as $filter) {
            // Detach all filters if none selected and news article has at least one filter
            if(empty($this->news_filters) && $this->filters->isNotEmpty()) {
                $this->newsArticle->filters()->detach();
                
            } else {
                // Detach current filter if not exist in selected filters
                if(!in_array($filter->name, $this->news_filters)) {
                    $this->newsArticle->filters()->detach($filter);
                }
            }
        }

        return redirect(route('admin.news.index'))->with('sucess', 'Succesvol het nieuwsartikel opgeslagen');
    }
}
