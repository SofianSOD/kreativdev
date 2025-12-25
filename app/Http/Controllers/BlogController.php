<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::with('category')->where('status', 'published')->latest()->paginate(9);
        $categories = Category::all();

        return view('blog.index', compact('posts', 'categories'));
    }

    public function show($slug)
    {
        $post = Post::with('category')->where('slug', $slug)->firstOrFail();
        $recentPosts = Post::where('status', 'published')
            ->where('id', '!=', $post->id)
            ->latest()
            ->take(5)
            ->get();

        return view('blog.show', compact('post', 'recentPosts'));
    }
}
