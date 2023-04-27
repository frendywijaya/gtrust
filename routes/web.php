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

Route::get('/dashboard', [DashboardController::class, 'index'] )->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
// Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');
Route::get('/blog-detail', [App\Http\Controllers\BlogController::class, 'detail'])->name('blog.detail');
Route::get('/kontak', [App\Http\Controllers\KontakController::class, 'index'])->name('kontak');
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services');
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');

// Route::get('/login', function() {
//     return view('auth.login');
// });

require __DIR__.'/auth.php';
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'detail'])->name('project');

