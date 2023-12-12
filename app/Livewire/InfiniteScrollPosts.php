<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class InfiniteScrollPostsLivewire extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $posts = Post::latest()->paginate(10);

        return view('livewire.infinite-scroll-posts', ['posts' => $posts]);
    }

    public function loadMore()
    {
        $this->paginator->currentPage++; // Utilisez la propriété currentPage fournie par le trait WithPagination

        $posts = Post::latest()->paginate(5, ['*'], 'page', $this->page);

        $this->emit('load-more', $posts->toArray());
    }
}
