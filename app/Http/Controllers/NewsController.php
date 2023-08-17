<?php

namespace App\Http\Controllers;
use \App\Models\News;
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
}
