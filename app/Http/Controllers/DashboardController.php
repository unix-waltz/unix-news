<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function filter($request_page){
        if($request_page){
            $page = $request_page;
            if(File::exists(resource_path("views/dashboard/includes/{$page}.blade.php"))){
                $included = "dashboard.includes.{$page}";
                        }else{
                            $page = 'dashboard';
                            $included = "";
                        }
        }else{
            $page = 'dashboard';
            $included = "";
        }
        return ["page" => $page,"included" => $included];
    }


    public function index(News $slug){
        $post_datapost = \App\Models\News::where('user_id', auth()->user()->id)->get();

        $result = $this->filter(request('page'));
        $page = $result['page'];
        $included = $result['included'];
        
        return view('dashboard.index',[
            'active' => true,
            'included' => $included,
            'page' => $page,
            "mypost_datapost" => $post_datapost,
            'post' => $slug,
             "category" => Category::all(),
        ]);
    }
    public function edit(News $slug){
@dd($slug);
    }

    public function createPost(Request $request){
        $slug =  strtolower($request->title);
         $slug = \Illuminate\Support\Str::slug($slug, '-')."_".mt_rand(1,100)."_".mt_rand(1,1000)."-".mt_rand(1,1000000)."-t_".time();
        //   dd((int)$request->category_id);
       $result = $request->validate([
        'title' => 'required|min:12|max:1000',
        "category_id" => 'required',
        "excerpt" => 'required|min:10|max:400',
        "body" => "required",
       ]);
       $result['user_id'] = auth()->user()->id;
       $result['category_id'] = (int)$request->category_id;
       $result['slug'] = $slug;
       News::create($result);
       return "ok";
    }
}
