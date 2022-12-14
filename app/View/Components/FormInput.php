<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormInput extends Component
{

    public $label;
    public $type;
    public $name;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label,$type,$name,$value)
    {
      $this->label = $label;
      $this->type = $type;
      $this->name = $name;
      $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form-input');
    }
}
