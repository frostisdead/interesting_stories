<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ApproveController;
use App\Http\Controllers\RegisteredUserController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', [RegisteredUserController::class, 'users'])->middleware(['admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/posts/create', [StoryController::class, 'create'])->name('createpost');
    Route::post('posts', [StoryController::class, 'custom_create'])->name('custom_create');
});

Route::group(['middleware' => ['admin']], function() {
    Route::get('/check-all-posts', [ApproveController::class, 'checkposts'])->name('checkposts');
    Route::get('/check/{slug}', [ApproveController::class, 'checkpost'])->name('check-post');
    Route::match(['get', 'post'], '/check/{slug}/approve', [ApproveController::class, 'custom_approve'])->name('custom.approved');
    Route::get('/show-post/{slug}/delete', [StoryController::class, 'delete'])->name('delete');
});

Route::get('/show-posts', [StoryController::class, 'show'])->name('showposts');
Route::get('/show-post/{slug}', [StoryController::class, 'showpost'])->name('showpost');

Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
