<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostCard extends Component
{
    public $createdAt;
    public $description;
    public $author;
    public $image;
    public $likes;
    public $id;

    public $comments;
    public function __construct($post)
    {
        $this->createdAt = $post->created_at;
        $this->description = $post->description;
        $this->author = $post->user->name;
        $this->image = $post->image;
        $this->likes = $post->likes;
        $this->id = $post->id;
        $this->comments = $post->comments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
