<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class PostController extends Controller
{
    public function show(Post $post): View|Factory
    {
        return view('posts.show', compact('post'));
    }
}
