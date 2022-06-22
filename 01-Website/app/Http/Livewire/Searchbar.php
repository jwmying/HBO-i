<?php

namespace App\Http\Livewire;

use App\Models\Agenda;
use App\Models\DomainDescription;
use App\Models\NewsArticle;
use Livewire\Component;

class Searchbar extends Component
{
    public $searchTerm, $SearchResultsAgenda, $SearchResultsDomain, $SearchResultsNews;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->SearchResultsAgenda = Agenda::Where('title', 'like', $searchTerm)
        ->OrWhere('description', 'like', $searchTerm)
        ->get();

        $this->SearchResultsDomain = DomainDescription::Where('title', 'like', $searchTerm)
        ->OrWhere('description', 'like', $searchTerm)
        ->get();

        $this->SearchResultsNews = NewsArticle::Where('title', 'like', $searchTerm)
        ->OrWhere('sub_title', 'like', $searchTerm)
        ->OrWhere('description', 'like', $searchTerm)
        ->get();

        return view('livewire.searchbar');
    }
}
