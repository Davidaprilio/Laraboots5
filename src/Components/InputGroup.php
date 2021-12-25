<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class InputGroup extends Component
{
    public $label;
    public $type;
    public $id;
    public $validation;
    public $old;
    public $value;
    public $mb;
    public $name;
    public $addonText;
    public $addonPosition;
    public $idGroup;

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
        $addonText = false,
        $addonPosition = 'before',
        $type = 'text'
    ){
        $this->type = $type;
        $this->value = $value;
        $this->label = $label;
        $this->id = $id;
        $this->validation = $validation;
        $this->mb = $mb;
        $this->addonText = $addonText;
        $this->addonPosition = $addonPosition;
        $this->name = $name;
        $this->old = $old;
        $this->idGroup = Str::random(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input-group');
    }
}
