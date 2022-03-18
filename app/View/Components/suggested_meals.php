<?php

namespace App\View\Components;

use App\Models\Meal;
use Illuminate\View\Component;

class suggested_meals extends Component
{


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($meals = array())
    {
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.suggested_meals');
    }
}
