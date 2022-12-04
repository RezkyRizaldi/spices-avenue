<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public Collection $posts;
    public Collection $searchPosts;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Collection $posts, Collection $searchPosts)
    {
        $this->posts = $posts;
        $this->searchPosts = $searchPosts;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-post');
    }
}
