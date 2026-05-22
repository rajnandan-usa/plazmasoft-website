<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Solution;

class SolutionController extends Controller
{
    public function index()
    {
        $solutions = Solution::where('is_published', true)->orderBy('sort_order')->get();

        return view('pages.solutions.index', compact('solutions'));
    }

    public function show(string $slug)
    {
        $solution = Solution::where('slug', $slug)->where('is_published', true)->firstOrFail();

        return view('pages.solutions.show', compact('solution', 'slug'));
    }
}
