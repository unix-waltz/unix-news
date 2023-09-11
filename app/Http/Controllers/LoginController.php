<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index',['active' => "true"]);
    }
    public function login(Request $request)
    {
$valid = $request->validate([
    'email' => 'required|email',
    'password' => 'required',
]);
if(\Illuminate\Support\Facades\Auth::attempt($valid)){
$request->session()->regenerate();
    return redirect()->intended('/home');
}else{
    return back()->with('error','Login failed!');
}
    }
}
