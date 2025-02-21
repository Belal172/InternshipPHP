<?php

use Illuminate\Routing\Router;
//admin route
Route::get('/admin',function(){
    return view('admin.admin');

});

?>