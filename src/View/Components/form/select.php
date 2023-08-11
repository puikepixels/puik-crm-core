<?php

namespace Puikepixels\PuikCrmCore\View\Components\form;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class select extends Component
{
    public string $name;
    public $label;
    public $model;

    public bool $required;
    public $type;
    public $placeholder;
    public $value;

    public function __construct(
        $name,
        $label,
        $model,
        $placeholder = "",
        $required = false,
        $type = "text",
        $value = null
    ) {
        $this->name = $name;
        $this->label = $label;
        $this->model = $model;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->type = $type;
        $this->value = $value;

    }



    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('puik-crm-core::Components.form.select');
    }
}
