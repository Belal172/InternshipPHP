<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(){
        //echo "this is user controller of basic controller";
        return view('home');
    }
    public function showBlog(){
        //echo "this is user controller of basic controller";
        return view('blog');
    }
    public function helloUser($name){
        //echo "this is user controller of basic controller";
        return view('myintro',compact('name'));//if key an dvalue are same name use compact() method;
    }
}
