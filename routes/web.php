<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});


Route::get('posts',[PostController::class, 'index'])->name('posts.index');

Route::get('post/add',[PostController::class, 'addPost'])->name('post.add');

Route::post('post/store',[PostController::class, 'storePost'])->name('post.store');

Route::get('/post/edit/{id}',[PostController::class, 'editPost'])->name('post.edit');

Route::post('post/update/{id}',[PostController::class, 'updatePost'])->name('post.update');

Route::get('/post/delete/{id}',[PostController::class, 'deletePost'])->name('post.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


