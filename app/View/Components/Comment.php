<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class comment extends Component
{
    public string $content;
    public int $id;
    public string $author;
    public int $likes;
    public function __construct($comment)
    {
        $this->content = $comment->content;
        $this->author = $comment->user->name;
        $this->id = $comment->id;
        $this->likes = 0;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.comment');
    }
}
