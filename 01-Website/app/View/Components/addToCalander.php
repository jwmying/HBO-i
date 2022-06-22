<?php

namespace App\View\Components;

use Illuminate\View\Component;

class addToCalander extends Component
{
    public $activityId;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($newactivityId)
    {
        $this->$activityId = $newactivityId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $data['activityId'] = $this->$activityId;
        return view('components.addToCalander', $data);
    }
}
