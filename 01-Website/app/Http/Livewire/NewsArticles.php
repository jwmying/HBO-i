<?php

namespace App\Http\Livewire;

use App\Models\NewsArticle;
use App\Models\NewsFilters;
use Livewire\Component;
use Livewire\WithPagination;

class NewsArticles extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $news_filters, $actual_filter;

    public function mount()
    {
        $this->news_filters = NewsFilters::all();
    }

    public function render()
    {
        $news_articles = NewsArticle::where('status', 'published');
        
        if ($this->actual_filter != null) {
            $news_articles->select('news.*')
                ->leftJoin('news_has_filters', 'news_has_filters.news_id', '=', 'news.id')
                ->where('news_filters_id', '=', $this->actual_filter);
        }

        return view('livewire.news-articles')->with([
            'news_articles' => $news_articles->paginate(6)
        ]);
    }

    public function changeFilter($id)
    {
        if ($this->actual_filter === $id) {
            $this->actual_filter = null;
        } else {
            $this->actual_filter = $id;
        }
    }
}
