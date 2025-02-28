<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;
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
route::controller(ExampleController::class)->group(function(){
    route::get('/user','hello')->name('users');
    route::get('/blog','showBlog')->name('blogs');
    
    route::get('/intro/{name}','helloUser')->name('intro');
});

//single action controller route
Route::get('/single',SingleController::class);

//restful routtng
route::resource('/photos',PhotoController::class);

//crud started using eloquent
Route::get('/student',[StudentController::class,'index'])->name('student.index');

route::get('/editstd/{id}',[StudentController::class,'edit'])->name('student.edit');
route::put('/updatestd/{id}',[StudentController::class,'update'])->name('student.update');
route::delete('/destroystd/{id}',[StudentController::class,'destroy'])->name('student.destroy');
route::get('/createstd',[StudentController::class,'create'])->name('student.create');
route::post('/storestd',[StudentController::class,'store'])->name('student.store');



route::get('/show/{id}',[StudentController::class,'show'])->name('student.view');


//layouts 
route::view('/home1','home1');

//blade templating engine
//loops 
//route::view('/loop','loopsexample');
//route::get('/loop/{id}',[UserController::class,'show'])->name('loops.view');

   
    Route::get('/loop',[Usercontroller::class,'index'])->name('user.index');


    //form hamdling
    Route::get('/emp',[EmployeeController::class,'index'])->name('employee.index');
    Route::get('/addemp',[EmployeeController::class ,'create'])->name('employee.create');
    route::post('/saveemp',[EmployeeController::class,'store'])->name('employee.save');
    route::get('/showemp/{id}',[EmployeeController::class,'show'])->name('employee.view');

    route::delete('/destroyemp/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
    route::get('/editemp/{id}',[EmployeeController::class,'edit'])->name('employee.edit');
    route::put('/updateemp/{id}',[EmployeeController::class,'update'])->name('employee.update');