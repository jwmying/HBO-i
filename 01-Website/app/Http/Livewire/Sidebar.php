<?php

namespace App\Http\Livewire;

use App\Models\NewsArticle;
use Livewire\Component;

class Sidebar extends Component
{
    public $recentArticles;

    public function mount()
    {
        $this->recentArticles = NewsArticle::all()->sortByDesc('created_at')->take(3);
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
