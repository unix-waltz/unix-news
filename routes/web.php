<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;


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