<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $data['categories'] = Category::latest()->with("posts")->take(10)->get();
        $data['recentPosts'] = Post::where("status",true)->latest()->with("admin", 'category')->take(3)->get();

        // search 
        $search = $request->search;
        $postQuery = Post::query()->where("status",true)->latest()->with("admin", 'category');

        if ($search) {
            $searchTerm = '%' . $search . '%';
            $postQuery->where("title", "LIKE", $searchTerm)
                ->orWhere("description", "LIKE", $searchTerm);
        }

        $data['posts'] = $postQuery->paginate(10);
        $data['search'] = $search;

        return view("section.post.index", $data);
    }


    public function show($slug)
    {
        $data['search'] = null;
        $data['categories'] = Category::latest()->with("posts")->has('posts')->get()->take(10);
        $data['posts'] = Post::where('status',true)->latest()->with("admin", 'category')->get()->take(3);
        $data['post'] = Post::where("slug", $slug)->with("admin", 'category')->first();

        return view("section.post.show", $data);
    }
}
