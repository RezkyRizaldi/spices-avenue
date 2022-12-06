<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ArchiveController extends Controller
{
    public function show(string $archive)
    {
        return view('archives.show', [
            'archives' => Post::select('title', 'slug', 'published_at')
                ->selectRaw(
                    "DATE_FORMAT(published_at, '%M %Y') as date,
                    DATE_FORMAT(published_at, '%M-%Y') as slug,
                    YEAR(published_at) as year,
                    MONTH(published_at) as month"
                )
                ->groupBy('date')
                ->get(),
            'archivePosts' => Post::whereYear('published_at', explode('-', $archive)[1])
                ->select('category_id', 'author_id', 'title', 'slug', 'image', 'excerpt', 'published_at')
                ->latest()
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
        ]);
    }
}
