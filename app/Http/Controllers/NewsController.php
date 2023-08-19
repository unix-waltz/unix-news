<?php

namespace App\Http\Controllers;

use App\Models\Category;
use \App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function News(){
    $news = News::all();
    return view("news",["news" => $news]);
}
public function DetailPost(News $news){
    return view("detail",["news" => $news]);
}
public function Category(Category $category){
return view("category",["category" => $category]);
}
public function Categories(){
    $category = Category::all();
    return view("categories",["data" => $category]);
}
public function Authors(){
    $data = User::all();
    return view("authors",["data" => $data]);
}
public function Author(User $author){
    $data = User::all();
    return view("authors",["data" => $author]);
}
}
