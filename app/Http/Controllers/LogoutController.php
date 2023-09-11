<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $request)
    {
\Illuminate\Support\Facades\Auth::logout();
$request->session()->invalidate();
$request->session()->regenerateToken();
return redirect('/');
    }
}
