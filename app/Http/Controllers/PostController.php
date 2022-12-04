<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostController extends Controller
{
    public function show(Post $post): View|Factory
    {
        $post->load([
            'category' => fn (BelongsTo $query) => $query->select(['id', 'name', 'slug']),
        ]);

        return view('posts.show', compact('post'));
    }
}
