<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\ProcessStep;
use App\Models\Project;
use App\Models\TechStackItem;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProjects  = Project::where('is_published', true)->where('is_featured', true)->orderBy('sort_order')->limit(6)->get();
        $testimonials      = Testimonial::where('is_published', true)->where('is_featured', true)->orderBy('sort_order')->limit(3)->get();
        $processSteps      = ProcessStep::orderBy('sort_order')->get();
        $techStackItems    = TechStackItem::where('is_featured', true)->orderBy('sort_order')->get();
        $latestPosts       = BlogPost::where('is_published', true)->orderByDesc('published_at')->limit(3)->get();

        return view('pages.home', compact(
            'featuredProjects', 'testimonials', 'processSteps', 'techStackItems', 'latestPosts'
        ));
    }

    public function about()
    {
        $testimonials = Testimonial::where('is_published', true)->orderBy('sort_order')->get();

        return view('pages.about', compact('testimonials'));
    }

    public function thankYou()
    {
        return view('pages.thank-you');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function termsOfService()
    {
        return view('pages.terms-of-service');
    }
}
