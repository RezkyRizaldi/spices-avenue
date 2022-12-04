<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public Collection $categories;
    public Category $category;
    public Collection $posts;
    public Collection $searchPosts;

    /**
     * Create a new component instance.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $categories
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $posts
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $searchPosts
     * @return void
     */
    public function __construct(Collection $categories, Category $category, Collection $posts, Collection $searchPosts)
    {
        $this->categories = $categories;
        $this->category = $category;
        $this->posts = $posts;
        $this->searchPosts = $searchPosts;
    }

    public function render(): View|Closure|string
    {
        return view('components.blog-post');
    }
}
