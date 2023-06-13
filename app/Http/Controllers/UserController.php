<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserCreated;
use Exception;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
   public function first()
   {
    return view('user.first');
   }
   public function main()
   {
    return view('user.welcome');
   }
   public function create()
   {
    return view('user.register');
   }
   public function store(Request $request)
   {
     //validate
    $validator=Validator::make($request->all(),[
        'name'=>'required',
        'password'=>'required|regex:/^[0-9]{10}$/|unique',
        'email'=>'required|unique:users|email',
        'password'=>'required',
    ]);
    if($validator->fails())
    {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    //save in user table
    try{
    User::create([
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),

    ]);

     return redirect()->route('loginPage')->withSuccess("Registration complete.Please Login.");
    }
    catch(Exception $e)
    {
        return redirect()->back()->withErrors($e->getMessage())->withInput();
    }
   }
   public function loginPage()
   {
    return view('user.login');
   }
   public function attemptLogin(Request $request)
   {

       $user = Auth::attempt([
           "name" => $request->name,
           "password" => $request->password
       ]);

       if ($user) {
           return redirect()->route('welcome');
       }else{
           return redirect()->route('loginPage');
       }
   }
  public function login(Request $request)
  {
    $request->validate([
        'name'=>'required',
        'password'=>'required',
    ]);
 }
 public function logout()
 {
     Auth::logout();
     return redirect('/');
 }

}
