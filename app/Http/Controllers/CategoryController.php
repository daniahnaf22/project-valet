<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;

    class CategoryController extends Controller {
        public function index() {
            return view('posts.categories', [
                'title' => 'Category',
                'active' => 'category',
                'categories' => Category::all()
            ]);
        }

        public function category(Category $category) {
            return view('posts.category', [
                'title' => "Post By : Category $category->name",
                'active' => 'category',
                'posts' => $category->posts
            ]);
        }
    }
?>