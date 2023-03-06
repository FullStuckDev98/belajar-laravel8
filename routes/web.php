<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// menggunakan model
use App\Models\Category;
use App\Models\User;
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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Coba Laravel",
        "bio" => "Nothing"
    ]);
});


//route menggunakan controller
Route::get('/blog', [PostController::class, 'index']); 


// halaman single post

// Route::get('posts/{post}', [PostController::class, 'show']); //route model binding
Route::get('/posts/{post:slug}', [PostController::class, 'show']); //route model binding



Route::get('/categories', function(){
    return view('categories', [
        'title' => "Post Categories",
        'categories' => Category::all()
    ]);
});


/**
 *                            ||              HARUS SAMA          ||
 *                            \/                                  \/ 
 * Route::get('categories/{category:slug}', function(Category $category){
 * }
 */
Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : ".$category->name,
        'posts' => $category->posts->load('category', 'author')
    ]);
});


Route::get('/authors/{author:username}', function(User $author){
    return view('posts', [
        'title' => 'Post By Author : '.$author->name,
        'posts' => $author->posts->load('category', 'author')
    ]);
});