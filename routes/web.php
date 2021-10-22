<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/* Upload Image */
use App\Http\Controllers\ImageUploadController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// These 'profile' are pertaining to controls of user's login accounts 
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile/postCreate', [App\Http\Controllers\ProfileController::class, 'postCreate'])->name('profile.postCreate');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/{id}/postEdit', [App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.postEdit');


// This creates all the standard routes for your Post model. 
Route::resource('post', App\Http\Controllers\PostController::class);

//=======================================================================================================

// BLOG : The route we have created to show all blog posts.
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index'])->name('blog');


// BLOG : Create a route to show 1 post.
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);


//-----------------------------------------------------------------
Route::get('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'create'])->name('blog.create');  //shows create post form
Route::post('/blog/create/post', [\App\Http\Controllers\BlogPostController::class, 'store']);                       //saves the created post to the database

// BLOG : ImageUploadController Route
//Route::get("image-upload",[ImageUploadController::class,'img_upload'])->name("img.upload");
//Route::post("imgstore",[ImageUploadController::class,'imagestore'])->name("img.store");


//------------------------------------------------------------------
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit'])->name('blog.edit');  //shows edit post form
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']);                   //commits edited post to the database 


//------------------------------------------------------------------
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']);                    //deletes post from the database
