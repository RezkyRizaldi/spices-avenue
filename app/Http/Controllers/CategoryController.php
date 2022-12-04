<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryController extends Controller
{
    public function show(Category $category): View|Factory
    {
        return view('categories.show', [
            'categories' => Category::select(['name', 'slug'])->get(),
            'category' => $category->load([
                'posts' => fn (HasMany $query) => $query->select(['category_id', 'title', 'slug', 'image', 'body', 'published_at']),
            ]),
            'posts' => Post::select(['title', 'slug'])
                ->limit(5)
                ->latest()
                ->get(),
        ]);
    }
}
