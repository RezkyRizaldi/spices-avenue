<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request): View|Factory
    {
        if (!empty($request->search)) {
            return view('search', [
                'categories' => Category::select(['name', 'slug'])->get(),
                'posts' => Post::select(['title', 'slug'])
                    ->limit(5)
                    ->latest()
                    ->get(),
                'searchPosts' => Post::query()
                    ->with([
                        'author' => fn (BelongsTo $query) => $query->select(['id', 'name', 'slug']),
                        'category' => fn (BelongsTo $query) => $query->select(['id', 'name', 'slug']),
                    ])
                    ->select(['category_id', 'author_id', 'title', 'slug', 'image', 'body', 'published_at'])
                    ->filter($request->search)
                    ->latest()
                    ->get(),
            ]);
        }

        return view('index', [
            'posts' => Post::query()
                ->with([
                    'category' => fn (BelongsTo $query) => $query->select(['id', 'name']),
                ])
                ->select(['category_id', 'author_id', 'title', 'slug', 'image', 'published_at'])
                ->limit(12)
                ->get(),
            'products' => Product::select(['name', 'description', 'image'])
                ->limit(3)
                ->latest()
                ->get(),
        ]);
    }
}
