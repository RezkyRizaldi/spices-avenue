<?php

namespace App\View\Components;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class BlogPost extends Component
{
    public Collection $archives;
    public Collection $archivePosts;
    public Author $author;
    public Collection $categories;
    public Category $category;
    public Collection $posts;
    public Collection $searchPosts;

    /**
     * Create a new component instance.
     *
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $archives
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $archivePosts
     * @param  \Illuminate\Database\Eloquent\Collection<Category>  $categories
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $posts
     * @param  \Illuminate\Database\Eloquent\Collection<Post>  $searchPosts
     * @return void
     */
    public function __construct(Collection $archives, Collection $archivePosts, Author $author, Collection $categories, Category $category, Collection $posts, Collection $searchPosts)
    {
        $this->archives = $archives;
        $this->archivePosts = $archivePosts;
        $this->author = $author;
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
