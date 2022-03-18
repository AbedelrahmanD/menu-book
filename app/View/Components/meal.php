<?php

namespace App\View\Components;

use Illuminate\View\Component;

class meal extends Component
{
    public $meal;
    public $showDescription;
    public $showCategory;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($meal, $showDescription = true, $showCategory = true)
    {
        $this->meal = $meal;
        $this->showDescription = $showDescription;
        $this->showCategory = $showCategory;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.meal');
    }
}
