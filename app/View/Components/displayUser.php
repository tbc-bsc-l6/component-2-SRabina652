<?php

namespace App\View\Components;

use Illuminate\View\Component;

class displayUser extends Component
{
    public $customers;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($customers)
    {
        $this->customers=$customers;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.display-user');
    }
}
