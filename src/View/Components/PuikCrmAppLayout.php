<?php
namespace Puikepixels\PuikCrmCore\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PuikCrmAppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('puik-crm-core::layouts.crm');
    }
}
