<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class formElement extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $labelText, public string $inputId, public string $inputType)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-element');
    }
}
