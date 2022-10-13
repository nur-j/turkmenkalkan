<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() 
    {
        return view('back.index');
    }

    public function login()
    {
        return view('back.login');
    }

    public function loginPost(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return view('back.index');
        } else {
            abort(404);
        }
    }
}
