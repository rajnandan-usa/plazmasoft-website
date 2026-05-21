<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


Route::middleware('redirectExceptAllowed')->group(function () {
    // Page routes
    Route::controller(PageController::class)->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/about", "about")->name("about");
        Route::get("/contact", "contact")->name("contact.submit");
        Route::get("/terms", "terms")->name("terms");
        Route::get("/privacy", "privacy")->name("privacy");
    });
    
    Route::controller(ContactController::class)->prefix("contact")->name("contact.")->group(function(){
        Route::get("/", "index")->name("index");
        Route::middleware(['throttle:1,1'])->post("/", "store")->name("store");

    });

    // Post routes
    Route::controller(PostController::class)->name("posts.")->prefix("post")->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/{slug}", "show")->name("show");
    });

    // Service routes
    Route::controller(ServiceController::class)->name("services.")->prefix("services")->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/mobile-app-development", "mobile_app_development")->name("mobile_app_development");
        Route::get("/android-app-development", "android")->name("android");
        Route::get("/ios-app-development", "ios")->name("ios");
        Route::get("/flutter-app-development", "flutter")->name("flutter");
        Route::get("/react-native-app-development", "react_native")->name("react_native");
        Route::get("/web-app-development", "web_app")->name("web_app");
        Route::get("/ui-ux-development", "ui_ux")->name("ui_ux");
        Route::get("/mvp-development", "mvp")->name("mvp");
        Route::get("/app-maintenance", "app_maintenance")->name("app_maintenance");
        Route::get("/chatgpt-development", "chatgpt")->name("chatgpt");
        Route::get("/iot-development", "iot")->name("iot");
        Route::get("/blockchain-app-development", "blockchain")->name("blockchain");
        Route::get("/ar-vr-development", "ar_vr")->name("ar_vr");
        Route::get("/{id}", "show")->name("show");
    });

    // Solution routes
    Route::controller(SolutionController::class)->name("solutions.")->prefix("solutions")->group(function () {
        Route::get("/fintech-development", "fintech")->name("fintech");
        Route::get("/fleet-management", "fleet_management")->name("fleet_management");
        Route::get("/ai-property-visualization", "ai_property_visualization")->name("ai_property_visualization");
        Route::get("/agritech-development", "agritech_development")->name("agritech_development");
    });

    // 301 redirects for removed solution pages
    Route::redirect('/solutions/transport-app', '/solutions/fleet-management', 301);
    Route::redirect('/solutions/food-ordering-development', '/portfolio-projects', 301);
    Route::redirect('/solutions/healthcare-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/qr-code-based-food-ordering', '/portfolio-projects', 301);
    Route::redirect('/solutions/on-demand-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/fitness-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/fantasy-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/texi-booking-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/dating-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/grocary-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/socialmedia-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/sportbatting-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/stocktrading-app', '/portfolio-projects', 301);
    Route::redirect('/solutions/videostreaming-app', '/portfolio-projects', 301);

    // Team routes
    Route::controller(TeamController::class)->name("team.")->prefix("team")->group(function () {
        Route::get("/", "index")->name("index");
    });

    // 301 redirects for removed "Hire Developers" pages
    Route::redirect('/team/flutter-developer', '/contact', 301);
    Route::redirect('/team/reactjs-developer', '/contact', 301);
    Route::redirect('/team/fullstack-developer', '/contact', 301);
    Route::redirect('/team/mernstack-developer', '/contact', 301);
    Route::redirect('/team/reactnative-developer', '/contact', 301);
    Route::redirect('/team/dedicated-developer', '/contact', 301);

    // Portfolio routes
    Route::controller(PortfolioController::class)->name("portfolio.")->prefix("portfolio-projects")->group(function () {
        Route::get("/", "index")->name("index");
        Route::get("/{id}", "show")->name("show");
    });
});

// Dashboard and profile routes
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Artisan cache clear route (secret key protected)
Route::get('/artisan-run/{secret}', function (string $secret) {
    if ($secret !== 'plazma2024clear') {
        abort(403);
    }

    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:cache');

    return response()->json([
        'status' => 'success',
        'message' => 'Config cleared and cached successfully.',
        'commands' => [
            'config:clear' => 'done',
            'cache:clear'  => 'done',
            'config:cache' => 'done',
        ]
    ]);
});

// Require additional routes
require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';