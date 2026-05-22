<?php

use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\PortfolioController;
use App\Http\Controllers\Web\ServiceController;
use App\Http\Controllers\Web\SolutionController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Services
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
    Route::get('/web-app-development',     [ServiceController::class, 'show'])->defaults('slug', 'web-app-development')->name('web-app-development');
    Route::get('/mobile-app-development',  [ServiceController::class, 'show'])->defaults('slug', 'mobile-app-development')->name('mobile-app-development');
    Route::get('/ai-integration',          [ServiceController::class, 'show'])->defaults('slug', 'ai-integration')->name('ai-integration');
    Route::get('/ui-ux-development',       [ServiceController::class, 'show'])->defaults('slug', 'ui-ux-development')->name('ui-ux-development');
    Route::get('/mvp-development',         [ServiceController::class, 'show'])->defaults('slug', 'mvp-development')->name('mvp-development');
});

// Solutions
Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/', [SolutionController::class, 'index'])->name('index');
    Route::get('/fintech-development',        [SolutionController::class, 'show'])->defaults('slug', 'fintech-development')->name('fintech-development');
    Route::get('/fleet-management',           [SolutionController::class, 'show'])->defaults('slug', 'fleet-management')->name('fleet-management');
    Route::get('/ai-property-visualization',  [SolutionController::class, 'show'])->defaults('slug', 'ai-property-visualization')->name('ai-property-visualization');
    Route::get('/agritech-development',       [SolutionController::class, 'show'])->defaults('slug', 'agritech-development')->name('agritech-development');
});

// Portfolio
Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::get('/', [PortfolioController::class, 'index'])->name('index');
    Route::get('/{slug}', [PortfolioController::class, 'show'])->name('show');
});

// Blog
Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// Contact
Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('index');
    Route::post('/', [ContactController::class, 'store'])->name('store')->middleware('throttle:3,1');
});

// Newsletter
Route::post('/newsletter/subscribe', [ContactController::class, 'newsletterSubscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/confirm/{token}', [ContactController::class, 'newsletterConfirm'])->name('newsletter.confirm');
Route::get('/newsletter/unsubscribe/{token}', [ContactController::class, 'newsletterUnsubscribe'])->name('newsletter.unsubscribe');

// Thank you
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');

// Legal pages
Route::get('/privacy-policy',   [HomeController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [HomeController::class, 'termsOfService'])->name('terms-of-service');

// 301 redirects from old URLs
Route::redirect('/portfolio-projects',                        '/portfolio', 301);
Route::redirect('/portfolio-projects/{id}',                   '/portfolio', 301);
Route::redirect('/post',                                      '/blog', 301);
Route::redirect('/post/{slug}',                               '/blog', 301);
Route::redirect('/terms',                                     '/terms-of-service', 301);
Route::redirect('/privacy',                                   '/privacy-policy', 301);
Route::redirect('/services/android-app-development',          '/services/mobile-app-development', 301);
Route::redirect('/services/ios-app-development',              '/services/mobile-app-development', 301);
Route::redirect('/services/flutter-app-development',          '/services/mobile-app-development', 301);
Route::redirect('/services/react-native-app-development',     '/services/mobile-app-development', 301);
Route::redirect('/services/app-maintenance',                  '/services/mobile-app-development', 301);
Route::redirect('/services/chatgpt-development',              '/services/ai-integration', 301);
Route::redirect('/services/iot-development',                  '/services/web-app-development', 301);
Route::redirect('/services/blockchain-app-development',       '/services/web-app-development', 301);
Route::redirect('/services/ar-vr-development',                '/services/web-app-development', 301);
Route::redirect('/solutions/transport-app',                   '/solutions/fleet-management', 301);
Route::redirect('/solutions/food-ordering-development',       '/portfolio', 301);
Route::redirect('/solutions/healthcare-app',                  '/portfolio', 301);
Route::redirect('/solutions/on-demand-app',                   '/portfolio', 301);
