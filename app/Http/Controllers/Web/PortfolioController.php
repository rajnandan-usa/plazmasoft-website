<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectCategory;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects   = Project::with('category')->where('is_published', true)->orderBy('sort_order')->get();
        $categories = ProjectCategory::orderBy('sort_order')->get();

        return view('pages.portfolio.index', compact('projects', 'categories'));
    }

    public function show(string $slug)
    {
        $project = Project::with(['category', 'images', 'testimonials'])
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();

        return view('pages.portfolio.show', compact('project'));
    }
}
