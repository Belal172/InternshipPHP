<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SingleController;
use App\Http\Controllers\PhotoController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('Homepage');
Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about');
});
//optional parameter 
Route::get('/about/{name?}', function ($name = "") {

    return view('about', ['name' => $name]);
});
//Route::redirect('/','/home');
//multiple parameters
Route::get('/users/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post ID: $postId, Comment ID: $commentId";
});
Route::get('milan/{name}/{id}', function ($name, $id) {
    return "name is: .$name age is .$id ";
});
route::get('first/{name}/{id}', function ($name, $id) {
    return view('first', ['name' => $name, 'id' => $id]);
});

//sub routes
route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Admin Dashboard";

    });
    Route::get('/users',function(){
        return "manage users";
    });
});

//controller routes
// route::get('/user',[UserController::class,'hello'])->name('users');
// route::get('/blog',[UserController::class,'showBlog'])->name('blogs');

// route::get('/intro/{name}',[UserController::class,'helloUser'])->name('intro');

//gropu of controller
route::controller(UserController::class)->group(function(){
    route::get('/user','hello')->name('users');
    route::get('/blog','showBlog')->name('blogs');
    
    route::get('/intro/{name}','helloUser')->name('intro');
});

//single action controller route
Route::get('/single',SingleController::class);

//restful routtng
route::resource('/photos',PhotoController::class);