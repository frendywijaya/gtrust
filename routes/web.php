<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
// Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');
Route::get('/blog-detail', [App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'detail'])->name('project');

require __DIR__ . '/auth.php';

// grouping route admin with middleware auth
Route::group(['as' => 'admin.', 'prefix' => '/admin', 'middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // blog
    Route::group(['as' => 'blog.', 'prefix' => '/blog'], function () {
        Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'delete'])->name('delete');
    });

    // project
    Route::group(['as' => 'project.', 'prefix' => '/project'], function () {
        Route::get('/', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'delete'])->name('delete');
    });

    // Contact Inbox
    Route::group(['as' => 'inbox.', 'prefix' => '/inbox'], function () {
        Route::get('/', [App\Http\Controllers\Admin\InboxController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\InboxController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\InboxController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\InboxController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\InboxController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\InboxController::class, 'delete'])->name('delete');
    });

    Route::group(['as' => 'cms.', 'prefix' => '/cms'], function () {

         // home slider
         Route::group(['as' => 'slider.', 'prefix' => '/slider'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SliderController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
        });

        // home page
        Route::group(['as' => 'home.', 'prefix' => '/home'], function () {
            Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\HomeController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\HomeController::class, 'update'])->name('update');
        });
    });


    Route::group(['as' => 'services.', 'prefix' => '/services'], function () {

        // facilitation
        Route::group(['as' => 'facilitation.', 'prefix' => '/facilitation'], function () {
            Route::get('/', [App\Http\Controllers\Admin\FacilitationController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\FacilitationController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\FacilitationController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\FacilitationController::class, 'update'])->name('update');
        });

        // learning
        Route::group(['as' => 'learning.', 'prefix' => '/learning'], function () {
            Route::get('/', [App\Http\Controllers\Admin\LearningController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\LearningController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\LearningController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\LearningController::class, 'update'])->name('update');
        });
    });

    Route::group(['as' => 'global.', 'prefix' => '/global'], function () {

        // Header
        Route::group(['as' => 'header.', 'prefix' => '/header'], function () {
            Route::get('/', [App\Http\Controllers\Admin\HeaderController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\HeaderController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\HeaderController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\HeaderController::class, 'update'])->name('update');
        });

        // Footer
        Route::group(['as' => 'footer.', 'prefix' => '/footer'], function () {
            Route::get('/', [App\Http\Controllers\Admin\FooterController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\FooterController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\FooterController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\FooterController::class, 'update'])->name('update');
        });

        // Footer
        Route::group(['as' => 'contact_widget.', 'prefix' => '/contact_widget'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactWidgetController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\ContactWidgetController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\ContactWidgetController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\ContactWidgetController::class, 'update'])->name('update');
        });

        // Social Media Page
        Route::group(['as' => 'social_media.', 'prefix' => '/social_media'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SocialMediaController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\SocialMediaController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\SocialMediaController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\SocialMediaController::class, 'delete'])->name('delete');
        });

        // Brand Logo
        Route::group(['as' => 'brand_logo.', 'prefix' => '/brand_logo'], function () {
            Route::get('/', [App\Http\Controllers\Admin\BrandLogoController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\BrandLogoController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\BrandLogoController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\BrandLogoController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [App\Http\Controllers\Admin\BrandLogoController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [App\Http\Controllers\Admin\BrandLogoController::class, 'delete'])->name('delete');
        });
    });
});
