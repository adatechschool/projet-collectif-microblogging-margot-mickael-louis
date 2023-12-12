<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $timeStamp;
    public $postDesc;
    public $userName;
    public $imageUrl;
    public $likes;
    public $id;
    public function __construct($post)
    {
        $this->timeStamp = $post->created_at;
        $this->postDesc = $post->description;
        $this->userName = $post->user->name;
        $this->imageUrl = $post->image;
        $this->likes = $post->likes;
        $this->id = $post->id;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
