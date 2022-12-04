<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request): View|Factory
    {
        if (!empty($request->search)) {
            $searchPosts = Post::latest()->filter($request->search)->get();

            return view('search', [
                'posts' => Post::latest()->limit(5)->get(),
                'searchPosts' => $searchPosts,
            ]);
        }

        return view('index', [
            'posts' => Post::latest()->limit(12)->get(),
        ]);
    }
}
