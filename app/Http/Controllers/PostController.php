<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'title' => 'Posts',
            'active' => 'posts',
            'posts' => Post::latest()->get()
        ]);
    }

    public function single(Post $post)
    {
        return view('posts.single-post', [
            'title' => 'Single-Post',
            'active' => 'posts',
            'single_post' => $post
        ]);
    }
}
