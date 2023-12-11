<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;

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

Route::get('/', function () { //menangkap url setelah host
    // return view('welcome'); //mencari file bernama welcome di dalam folder views
    return view("home", [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view("about", [
        "name" => "Jamal",
        "email" => "jamaludin@gmail.com",
        "image" => "jamal.jpg",
        "title" => "About"
    ]); //send data dengan list
});

Route::get('/posts', [PostController::class, "index"]);

Route::get("/posts/{post:slug}", [PostController::class, "show"]); //model = where id, model:attribute where attribute = value 

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,
    ]);
});
