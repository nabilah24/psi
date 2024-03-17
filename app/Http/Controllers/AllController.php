<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function menu(){
        return view('menu');
    }
    public function contact(){
        return view('contact');
    }
    public function adminMenu(){
        return view('admin.menu.adminMenu');
    }
}
