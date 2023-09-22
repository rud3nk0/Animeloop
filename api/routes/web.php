<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Category

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('category');

Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])
    ->name('category.create');

Route::post('/category', [\App\Http\Controllers\CategoryController::class, 'store'])
    ->name('category.store');

Route::get('/category/{id}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])
    ->name('category.edit');

Route::put('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])
    ->name('category.update');

Route::delete('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])
    ->name('category.destroy');
//finish Category routes


//Post

Route::get('/post', [\App\Http\Controllers\PostController::class, 'index'])
    ->name('post');

Route::get('/post/create', [\App\Http\Controllers\PostController::class, 'create'])
    ->name('post.create');

Route::post('/post', [\App\Http\Controllers\PostController::class, 'store'])
    ->name('post.store');

Route::get('/post/{id}/edit', [\App\Http\Controllers\PostController::class, 'edit'])
    ->name('post.edit');

Route::put('/post/{id}', [\App\Http\Controllers\PostController::class, 'update'])
    ->name('post.update');

Route::delete('/post/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])
    ->name('post.destroy');

//finish Post routes

//User

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('user');

Route::get('/user/create', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('post.create');

Route::post('/user', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('user.store');

Route::get('/user/{id}/edit', [\App\Http\Controllers\UserController::class, 'edit'])
    ->name('user.edit');

Route::put('/user/{id}', [\App\Http\Controllers\UserController::class, 'update'])
    ->name('user.update');

Route::delete('/user/{id}', [\App\Http\Controllers\UserController::class, 'destroy'])
    ->name('user.destroy');

//finish User routes

// Voice Actings routes

Route::get('/voiceActing', [\App\Http\Controllers\voiceActingsController::class, 'index'])
    ->name('voiceActing');

Route::get('/voiceActing/create', [\App\Http\Controllers\voiceActingsController::class, 'create'])
    ->name('voiceActing.create');

Route::post('/voiceActing', [\App\Http\Controllers\voiceActingsController::class, 'store'])
    ->name('voiceActing.store');

Route::get('/voiceActing/{id}/edit', [\App\Http\Controllers\voiceActingsController::class, 'edit'])
    ->name('voiceActing.edit');

Route::put('/voiceActing/{id}', [\App\Http\Controllers\voiceActingsController::class, 'update'])
    ->name('voiceActing.update');

Route::delete('/voiceActing/{id}', [\App\Http\Controllers\voiceActingsController::class, 'destroy'])
    ->name('voiceActing.destroy');

//finish Voice Acting routes





