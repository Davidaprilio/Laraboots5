<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Navs extends Component
{
    public $menu;
    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $menu, string $type)
    {
        $this->menu = $menu;
        $this->type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.navs');
    }
}
