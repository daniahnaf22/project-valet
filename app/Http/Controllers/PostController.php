<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $title = "";
        if (request('category')){
           $category = Category::firstWhere('slug', request('category'));
           $title = "In. $category->name"; 
        }
        
        if (request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = "By. $author->name"; 
         }

        return view('posts.index', [
            'title' => "All Posts $title",
            'active' => 'posts',
            'posts' => Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString()
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
