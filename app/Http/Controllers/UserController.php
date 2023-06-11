<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;


class UserController extends Controller
{
   public function first()
   {
    return view('user.first');
   }
   public function create()
   {
    return view('user.register');
   }
   public function store(Request $request)
   {
     //validate
     $request->validate
     ([
        'name'=>'required',
        'password'=>'required|regex:/^[0-9]{10}$/|unique',
        'email'=>'required|unique:users|email',
        'password'=>'required|confirmed',
    ]);
    //save in user table
    User::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);


   }
   public function attemptLogin(Request $request)
   {

       $user = Auth::attempt([
           "name" => $request->name,
           "password" => $request->password
       ]);

       if ($user) {
           return redirect('user.welcome');
       }else{
           return redirect('/login');
       }
   }
  public function login(Request $request)
  {
    return view('user.login');
 }
 public function logout()
 {
     Auth::logout();
     return redirect('/');
 }
}
