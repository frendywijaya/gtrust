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

//  blog
Route::group(['as' => 'blog.', 'prefix' => '/blog'], function () {
    Route::get('/', [App\Http\Controllers\BlogController::class, 'index'])->name('index');
    Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'detail'])->name('detail');
});

// project
Route::group(['as' => 'project.', 'prefix' => '/project'], function () {
    Route::get('/{slug}', [App\Http\Controllers\ProjectController::class, 'detail'])->name('detail');
});

Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::get('/services/facilitation', [App\Http\Controllers\ServicesController::class, 'servicesFacilitation'])->name('servicesFacilitation');
Route::get('/services/learning', [App\Http\Controllers\ServicesController::class, 'servicesLearning'])->name('servicesLearning');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

require __DIR__ . '/auth.php';

// grouping route admin with middleware auth
Route::group(['as' => 'admin.', 'prefix' => '/admin', 'middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // category
    Route::group(['as' => 'category.', 'prefix' => '/category'], function(){
        Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('index');
        Route::post('/store', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('store');
        Route::patch('/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('destroy');
    });

    // blog
    Route::group(['as' => 'blog.', 'prefix' => '/blog'], function () {
        Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'destroy'])->name('destroy');
    });

    // project
    Route::group(['as' => 'project.', 'prefix' => '/project'], function () {
        Route::get('/', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy'])->name('destroy');
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
            Route::get('/create', [App\Http\Controllers\Admin\SliderController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\SliderController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\SliderController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\SliderController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\SliderController::class, 'destroy'])->name('destroy');
        });

        // home page
        Route::group(['as' => 'home.', 'prefix' => '/home'], function () {
            Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\HomeController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\HomeController::class, 'update'])->name('update');
        });

        // about page
        Route::group(['as' => 'about.', 'prefix' => '/about'], function () {
            Route::get('/', [App\Http\Controllers\Admin\AboutController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\AboutController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('update');
        });

        // about page
        Route::group(['as' => 'team.', 'prefix' => '/team'], function () {
            Route::get('/', [App\Http\Controllers\Admin\TeamController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\TeamController::class, 'store'])->name('store');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\TeamController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\TeamController::class, 'destroy'])->name('destroy');
        });

        // about page
        Route::group(['as' => 'testimoni.', 'prefix' => '/testimoni'], function () {
            Route::get('/', [App\Http\Controllers\Admin\TestimoniController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\TestimoniController::class, 'store'])->name('store');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\TestimoniController::class, 'destroy'])->name('destroy');
        });

        // contact page
        Route::group(['as' => 'contact.', 'prefix' => '/contact'], function () {
            Route::get('/', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('index');
            Route::post('/store', [App\Http\Controllers\Admin\ContactController::class, 'store'])->name('store');
            Route::get('/edit', [App\Http\Controllers\Admin\ContactController::class, 'edit'])->name('edit');
            Route::post('/update', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('update');
        });
    });


    Route::group(['as' => 'services.', 'prefix' => '/services'], function () {

        // Sub Service
        Route::group(['as' => 'subservice.', 'prefix' => '/subservice'], function () {
            Route::get('/', [App\Http\Controllers\Admin\SubServiceController::class, 'index'])->name('index');
            Route::get('/create', [App\Http\Controllers\Admin\SubServiceController::class, 'create'])->name('create');
            Route::post('/store', [App\Http\Controllers\Admin\SubServiceController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [App\Http\Controllers\Admin\SubServiceController::class, 'edit'])->name('edit');
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\SubServiceController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\SubServiceController::class, 'destroy'])->name('destroy');
        });

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

    // static page
    Route::group(['as' => 'staticpage.','prefix' => 'staticpage'], function () {
        Route::post('/{section}/store', [App\Http\Controllers\StaticPageController::class, 'save'])->name('save');
    });

    // other services
    Route::group(['as' => 'otherservice.', 'prefix' => '/otherservice'], function () {
        Route::post('/store', [App\Http\Controllers\Admin\OtherServiceController::class, 'store'])->name('store');
        Route::patch('/update/{id}', [App\Http\Controllers\Admin\OtherServiceController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [App\Http\Controllers\Admin\OtherServiceController::class, 'destroy'])->name('destroy');
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
            Route::patch('/update/{id}', [App\Http\Controllers\Admin\BrandLogoController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [App\Http\Controllers\Admin\BrandLogoController::class, 'destroy'])->name('destroy');
        });
    });
});
