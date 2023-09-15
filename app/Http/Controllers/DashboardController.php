<?php

namespace App\Http\Controllers;

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

        ]);
    }
    public function edit(News $slug){
@dd($slug);
    }

    public function createPost(Request $request){
        @dd($request->excerpt);
    }
}
