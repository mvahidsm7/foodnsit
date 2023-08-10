<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function Index()
    {
        $user = Auth::user();
        $menu = Menu::all();
        return view('index', compact('user', 'menu'));
    }
}
