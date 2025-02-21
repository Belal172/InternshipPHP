<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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
Route::get('/about/{name?}', function ($name="") {
   
    return view('about',['name'=>$name]);
});
//Route::redirect('/','/home');
//multiple parameters
Route::get('/users/{postId}/comment/{commentId}', function ($postId, $commentId) {
    return "Post ID: $postId, Comment ID: $commentId";
});
Route::get('milan/{name}/{id}',function($name,$id){
return "name is: .$name age is .$id ";
});
route::get('first/{name}/{id}' ,function($name,$id){
return view('first',['name'=>$name,'id'=>$id]);
});