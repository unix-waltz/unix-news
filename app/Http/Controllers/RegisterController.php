<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Clockwork\Support\Lumen\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',["active"=>true]);
    }
    public function register(Request $request){
        $valid = $request->validate([
            'name' => 'required|min:10|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:255',
        ]);
        $valid['password'] = Hash::make($valid['password']);
        if($valid){
        User::create($valid);
    return redirect('/login')->with('success','Registrasi Berhasil! silahkan login');
    }
    }
}
