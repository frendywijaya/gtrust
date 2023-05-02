<?php

use App\Http\Controllers\DashboardController;
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

require __DIR__.'/auth.php';

// grouping route admin with middleware auth
Route::group(['as' => 'admin.', 'prefix' => '/admin', 'middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'] )->name('dashboard');

    // blog
    Route::group(['as' => 'blog.', 'prefix' => '/blog'], function () {
        Route::get('/', [App\Http\Controllers\Admin\BlogController::class, 'index'])->name('index');
        Route::get('/create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('create');
        Route::post('/store', [App\Http\Controllers\Admin\BlogController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\BlogController::class, 'edit'])->name('edit');
        Route::post('/update/{id}', [App\Http\Controllers\Admin\BlogController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\BlogController::class, 'delete'])->name('delete');
    });


});
