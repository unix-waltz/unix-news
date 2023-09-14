<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $included = "";
        if(request('page')){
            $page = request('page');
            if(File::exists(resource_path("views/dashboard/includes/{$page}.blade.php"))){
                $included = "dashboard.includes.{$page}";
                        }else{
                            $page = 'home';
                        }
        }else{
            $page = 'home';
        }
     
        return view('dashboard.index',['active' => true,'included' => $included,'page' => $page]);
    }
}
