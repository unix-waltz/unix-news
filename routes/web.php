<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



Route::post('/dashboard/post/create',[DashboardController::class,'createPost'])->middleware('auth')->name('createPost');

Route::get('/dashboard/post/preview/{slug:slug}',[DashboardController::class,'index'])->middleware('auth');
Route::put('/dashboard/post/editPost/',[DashboardController::class,'editLogic'])->middleware('auth')->name('editM');
Route::get('/dashboard/post/hapus/{id}',[DashboardController::class,'delete'])->middleware('auth');

Route::get('/home',[DashboardController::class,'index'])->middleware('auth');
Route::post('/logout',[LogoutController::class,'index'])->middleware('auth');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::post('/login',[LoginController::class,'login']);
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('/',[NewsController::class, 'index']);
Route::get('/news',[NewsController::class,"News"]);
Route::get('/Category/{category:category_slug}',[NewsController::class,"Category"]);
Route::get('/news/{news:slug}',[NewsController::class,"DetailPost"]);
Route::get('/Category',[NewsController::class,"Categories"]);
Route::get('/Authors',[NewsController::class,"Authors"]);
Route::get('/author/{username:username}',[NewsController::class,"Author"]);
Route::get('/about',[NewsController::class,"About"]);
Route::get('/test',function(){
    return view('test');
});