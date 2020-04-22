<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('home', compact('users'));
    }
    public function store(Request $request)
    {
      
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|email',
        'mobile'=>'required',
        'password'=>'required|alphaNum|min:6'
        ]);
      $user = new User([
        'name'=>$request->input('name'),
        'email'=>$request->input('email'),
        'mobile' => $request->input('mobile'),
        'password' => $request->input('password'),
      ]);

      $user->save();
     return redirect('/home');
    }
    public function log(Request $request)
    {
       $request->validate([
        'email'=>'required',
        'password'=>'required|alphaNum|min:6'
        ]);

       $email=$request->input('email');
       $pass=$request->input('password');

       $checkLogin=DB::table('users')->where(['email'=>$email,'password'=>$pass])->get();
       if(count($checkLogin)>0)
       {
        return redirect('/home');
       }
       else
       {
        return back()->with('erro','Not valid username or password!');
       }
    }
    public function login()
    {     
      return view('auth.login');
    } 
    public function register()
    {     
      return view('auth.register');
    } 

}
