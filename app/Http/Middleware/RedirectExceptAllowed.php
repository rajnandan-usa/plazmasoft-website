<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class RedirectExceptAllowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // List of allowed route names
        $allowedRouteNames = ['index', 'about', 'contact.index', 'contact.store', 'posts.index', 'posts.show', 'portfolio.index', 'portfolio.show', 'terms', 'privacy','services.web_app'];

        // Get the current route name
        $currentRouteName = Route::currentRouteName();

        // Check if the current route name is not in the allowed list
        if (!in_array($currentRouteName, $allowedRouteNames)) {
            return redirect()->route('index'); // Redirect to the home page
        }

        return $next($request);
    }
}
