<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\RedirectResponse;

class CommentController extends Controller
{
    public function store(CommentRequest $request): RedirectResponse
    {
        Comment::create($request->validated());

        return back()->with('success', 'Data berhasil ditambahkan!');
    }
}
