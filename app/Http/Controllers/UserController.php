<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $data =$request->validate([
            'name'=>'required ',
            'email'=>'required |email',
            'password'=>'required |confirmed'
    
        ]);
    
        $register=User::create($data);
         if($register){
            return redirect()->route('login.login');
         }
    
       }
      public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        if (Auth::attempt($credentials)) {
            return redirect()->route('login.dashboard');
        } else {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->withInput();
        }
    }
    
       public function dashboardPage(){
        if(Auth::check()){
            return view('login.dashboard');
        }
        else{
            return redirect()->route('login.login');
        }
       }
       public function logout(){
        Auth::logout();
    return redirect()->route('login.login');
       }
}
