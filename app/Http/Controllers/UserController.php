<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello(){
        //echo "this is user controller of basic controller";
        return view('home');
    }
    public function helloUser(){
        //echo "this is user controller of basic controller";
        return view('myintro');
    }
}
