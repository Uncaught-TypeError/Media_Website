<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SubCommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

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
    $posts = Post::query()->orderBy('created_at','desc')->paginate(6)->withQueryString();
    $viewposts = Post::all()->sortByDesc('created_at');
    Paginator::useBootstrap();
    $category = Category::query()->orderBy('created_at','desc')->paginate(9)->withQueryString();
    return view('welcome', compact('posts','viewposts','category'));
});

Auth::routes();

// //admin route
// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return view('admin.index');
// }]);

// Route::get('protected', ['middleware' => ['auth'], function() {
//     // this page requires that you be logged inbut you don't need to be an admin
//     return view('admin.index');
// }]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('page', PostController::class);
Route::resource('posts',HomeController::class);
Route::resource('comments',CommentController::class);
Route::resource('users',UserController::class);
Route::resource('admin',AdminController::class);

Route::post('comments/{id}', [CommentController::class, 'store2'])->name('comments.store2');
Route::post('subcomments/{id}', [SubCommentController::class, 'store3'])->name('comments.store3');


