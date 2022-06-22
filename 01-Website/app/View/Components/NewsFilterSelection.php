<?php

namespace App\View\Components;

use App\Models\NewsFilters;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Collection;

class NewsFilterSelection extends Component
{
    /**
     * The available filters to show.
     *
     * @var Collection
     */
    public $filters;

    /**
     * The selected filters to highlight.
     *
     * @var array
     */
    public $selected;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($filters, $selected = [])
    {
        $this->filters = $filters;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {        
        return view('components.news-filter-selection');
    }
}
