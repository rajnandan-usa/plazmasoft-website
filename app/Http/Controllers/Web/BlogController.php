<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts      = BlogPost::with(['category', 'author'])->where('is_published', true)->orderByDesc('published_at')->paginate(9);
        $categories = BlogCategory::orderBy('sort_order')->get();

        return view('pages.blog.index', compact('posts', 'categories'));
    }

    public function show(string $slug)
    {
        $post = BlogPost::with(['category', 'author', 'tags'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        $post->increment('view_count');

        $related = BlogPost::with('category')
            ->where('is_published', true)
            ->where('id', '!=', $post->id)
            ->where('blog_category_id', $post->blog_category_id)
            ->orderByDesc('published_at')
            ->limit(3)
            ->get();

        return view('pages.blog.show', compact('post', 'related'));
    }
}
