<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function Index(){

        return view('welcome');
    }


    public function Logout(){
        Auth::logout();

        return Redirect()->route('login')->with('success', 'User logout successfully');
    }
}
