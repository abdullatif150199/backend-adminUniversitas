<?php

use Illuminate\Support\Facades\Route;
use App\Models\post;
use App\Http\Controllers\postController;

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
    return view('welcome', [
        'title' => 'welcome'
    ]);
});

// Route::get('/home', function () {
//     return view('home', [
//         "title" => "home"
//     ]);
// });

// Route::get('/about', function () {
//     return view('about', [
//         "title" => "about",
//         "nama" => "abdul",
//         "email" => "ahmadgagahhh@gmail.com",
//         "gambar" => "gambar1.jpg"
//     ]);
// });

// Route::get('/posts', [postController::class, 'index']);

// // halaman single post
// Route::get('/post/{slug}', [postController::class, 'show']);

//     // $new_post =[];
//     // foreach($blog_posts as $post) {
//     //     if ($post['slug'] === $slug) {
//     //         $new_post = $post;
//     //     }
//     // };

  

