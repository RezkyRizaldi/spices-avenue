<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AuthorController extends Controller
{
    public function show(Author $author): View|Factory
    {
        return view('authors.show', [
            'categories' => Category::select(['name', 'slug'])->get(),
            'author' => $author->load([
                'posts' => fn (HasMany $query) => $query->select(['category_id', 'author_id', 'title', 'slug', 'image', 'body', 'published_at']),
            ]),
            'posts' => Post::select(['title', 'slug'])
                ->limit(5)
                ->latest()
                ->get(),
        ]);
    }
}
