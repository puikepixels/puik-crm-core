<?php

namespace Puikepixels\PuikCrmCore\View\Components\btn;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class edit extends Component
{
    public $href;

    public function __construct($href)
    {
        $this->href = $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('puik-crm-core::Components.btn.edit');
    }
}
