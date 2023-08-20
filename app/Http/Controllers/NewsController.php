<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News(){
    $news = News::with('category','user')->latest()->get();
    return view("news",["news" => $news,
    "active" => "news"
]);
}
public function DetailPost(News $news){
    return view("detail",["news" => $news,"active" => "news"]);
}
public function Category(Category $category){
return view("category",["category" => $category,"active" => "category"]);
}
public function Categories(){
    $category = Category::with('news','user')->get();
    return view("categories",["data" => $category,
    "active" => "category"
]);
}
public function Authors(){
    $data = User::with('news')->get();
    return view("authors",["data" => $data->load('category'),
    "active" => "category"
]);
}
public function Author(User $username){
    return view("author",["author" => $username,"active" => "category"
]);
}
public function About(){
    return view("about",[
    "active" => "about"
]);
}
}
