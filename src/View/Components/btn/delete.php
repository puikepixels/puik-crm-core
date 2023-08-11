<?php
namespace Puikepixels\PuikCrmCore\View\Components\btn;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class delete extends Component
{
    public $action;
    public $model;


    public function __construct($action, $model)
    {
        $this->action = $action;
        $this->model = $model;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('puik-crm-core::Components.btn.delete');
    }
}
