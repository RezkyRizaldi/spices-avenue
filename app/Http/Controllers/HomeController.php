<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Gallery;
use App\Models\Post;
use App\Models\Product;
use App\Models\Team;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request): View|Factory
    {
        if (! empty($request->search)) {
            return view('search', [
                'archives' => Post::select('title', 'slug', 'published_at')
                    ->selectRaw(
                        "DATE_FORMAT(published_at, '%M %Y') as date,
                        DATE_FORMAT(published_at, '%M-%Y') as slug,
                        YEAR(published_at) as year,
                        MONTH(published_at) as month"
                    )
                    ->groupBy('date')
                    ->get(),
                'categories' => Category::select('name', 'slug')->get(),
                'comments' => Comment::query()
                    ->with([
                        'post' => fn (BelongsTo $query) => $query->select('id', 'title', 'slug'),
                    ])
                    ->select('post_id', 'name', 'message')
                    ->limit(5)
                    ->latest()
                    ->get(),
                'posts' => Post::select('title', 'slug')
                    ->limit(5)
                    ->latest()
                    ->get(),
                'searchPosts' => Post::query()
                    ->with([
                        'author' => fn (BelongsTo $query) => $query->select('id', 'name', 'slug'),
                        'category' => fn (BelongsTo $query) => $query->select('id', 'name', 'slug'),
                    ])
                    ->select('category_id', 'author_id', 'title', 'slug', 'image', 'excerpt', 'published_at')
                    ->filter($request->search)
                    ->latest()
                    ->get(),

            ]);
        }

        return view('index', [
            'galleries' => Gallery::select('id', 'name', 'image')
                ->limit(6)
                ->latest()
                ->get(),
            'posts' => Post::query()
                ->with([
                    'category' => fn (BelongsTo $query) => $query->select('id', 'name'),
                ])
                ->select('category_id', 'author_id', 'title', 'slug', 'image', 'published_at')
                ->limit(12)
                ->latest()
                ->get(),
            'products' => Product::select('name', 'description', 'image')
                ->limit(3)
                ->latest()
                ->get(),
            'teams' => Team::select('name', 'position', 'image')
                ->limit(3)
                ->latest()
                ->get(),
        ]);
    }
}
