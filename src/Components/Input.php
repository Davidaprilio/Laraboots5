<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Input extends Component
{
    public $label;
    public $type;
    public $id;
    public $validation;
    public $old;
    public $value;
    public $mb;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $label = false,
        $id = false,
        $validation = false,
        $old = false,
        $value = false,
        $mb = 3,
        $name = false,
        $type = 'text'
    ){
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
        $this->id = $id;
        $this->validation = $validation;
        $this->mb = $mb;
        $this->name = $name;
        $this->old = $old;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input');
    }
}
