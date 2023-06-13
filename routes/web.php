<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\SpecController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[UserController::class,'first'])->name('first');
Route::get('/login',[UserController::class,'loginPage'])->name('loginPage');
Route::post('/login',[UserController::class,'attemptLogin'])->name('loginStore');
Route::post('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/register',[UserController::class,'create'])->name('register.create');
Route::post('/register',[UserController::class,'store'])->name('register.store');
Route::middleware(['login'])->group(function(){
Route::get('/user/welcome',[UserController::class,'main'])->name('welcome');
});

//brand
Route::get('/brand',[BrandController::class,'index']);
Route::get('/brand/create',[BrandController::class,'create'])->name('brandCreate');
Route::post('/brand',[BrandController::class,'store'])->name('brandStore');
Route::delete('/brand/{id}',[BrandController::class,'destroy']);
Route::get('/brand/{id}/edit',[BrandController::class,'edit']);
Route::put('/brand/{id}',[BrandController::class,'update']);

//spec
Route::get('/spec',[SpecController::class,'index'])->name('index');
Route::get('/spec/create',[SpecController::class,'create'])->name('specCreate');
Route::post('/spec',[SpecController::class,'store'])->name('specStore');
Route::delete('/spec/{id}',[SpecController::class,'destroy']);
Route::get('/spec/{id}/edit',[SpecController::class,'edit']);
Route::put('/spec/{id}',[SpecController::class,'update']);

