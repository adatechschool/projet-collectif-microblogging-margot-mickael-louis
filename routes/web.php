<?php

// routes/web.php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LikesController;
use App\Models\Post;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts', [PostController::class, "index"])->middleware(['auth', 'verified'])->name('index');
Route::get('/posts/{id}', [PostController::class, "uniquepost"])->middleware(['auth', 'verified'])->name('uniquepost');
Route::post('/posts', [PostController::class, 'create'])->middleware(['auth', 'verified'])->name('create');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/like/{likable_type}/{likable_id}', [LikesController::class, 'like'])->name('like');
    Route::delete('/like/{likable_type}/{likable_id}', [LikesController::class, 'unlike'])->name('unlike');
    Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
});

require __DIR__ . '/auth.php';
