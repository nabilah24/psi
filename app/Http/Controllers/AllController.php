<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
use App\Models\Menu;

class AllController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function menu()
    {
        return view('menu');
    }

    public function contact()
    {
        return view('contact');
    }

    public function adminMenu()
    {
        return view('admin.menu.adminMenu');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function user()
    {
        return view('admin.user.user');
    }

    public function tables()
    {
        // Fetch menus from the database
        $menus = Menu::all(); // Assuming you want to fetch all menus

        // Pass menus data to the view
        return view('admin.tables', compact('menus'));
    }

    public function maps()
    {
        return view('admin.maps');
    }
}
