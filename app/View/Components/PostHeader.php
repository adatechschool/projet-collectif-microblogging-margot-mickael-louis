<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostHeader extends Component
{
    public $userName;
    public $timeStamp;
    public $postDesc;
    public function __construct($userName, $timeStamp,$postDesc)
    {
        $this->userName = $userName;
        $this->timeStamp = $timeStamp;
        $this->postDesc = $postDesc;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-header');
    }
}
