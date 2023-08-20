<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index',[
        "active" => "home"

    ]);
});
Route::get('/news',[NewsController::class,"News"]);
Route::get('/Category/{category:category_slug}',[NewsController::class,"Category"]);
Route::get('/news/{news:slug}',[NewsController::class,"DetailPost"]);

Route::get('/Category',[NewsController::class,"Categories"]);
Route::get('/Authors',[NewsController::class,"Authors"]);
Route::get('/author/{username:username}',[NewsController::class,"Author"]);
Route::get('/about',[NewsController::class,"About"]);