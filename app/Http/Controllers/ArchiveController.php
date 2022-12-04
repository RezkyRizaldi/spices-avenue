<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

class ArchiveController extends Controller
{
    public function show(string $archive)
    {
        return view('archives.show', [
            'archives' => Post::select('title', 'slug', 'published_at')
                ->selectRaw("DATE_FORMAT(published_at, '%M %Y') as date, DATE_FORMAT(published_at, '%M-%Y') as slug, YEAR(published_at) as year, MONTH(published_at) as month")
                ->groupBy('date')
                ->get(),
            'archivePosts' => Post::whereYear('published_at', explode('-', $archive)[1])
                ->select('category_id', 'author_id', 'title', 'slug', 'body', 'image', 'published_at')
                ->get(),
            'categories' => Category::select(['name', 'slug'])->get(),
            'posts' => Post::select(['title', 'slug'])
                ->limit(5)
                ->latest()
                ->get(),
        ]);
    }
}
