<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', [BlogPostController::class, 'index'])->name('blog');

Route::get('/blog/{blogPost}', [BlogPostController::class, 'show']);

Route::get('/blog/create/post', [BlogPostController::class, 'create'])->name('blog/create/post');
Route::post('/blog/create/post', [BlogPostController::class, 'store']);

Route::get('/blog/{blogPost}/edit', [BlogPostController::class, 'edit'])->name('/blog/{blogPost}/edit');
Route::put('/blog/{blogPost}/edit', [BlogPostController::class, 'update']);

Route::delete('/blog/{blogPost}', [BlogPostController::class, 'destroy']);


