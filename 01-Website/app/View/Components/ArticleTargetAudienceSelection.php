<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleTargetAudienceSelection extends Component
{
    /**
     * The available options to show.
     *
     * @var Collection
     */
    public $options;

    /**
     * The selected option to highlight.
     *
     * @var array
     */
    public $selected;
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($options, $selected = null)
    {
        $this->options = $options;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article-target-audience-selection');
    }
}
