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
        $menu = Menu::paginate(3);
        return view('index', compact('user', 'menu'));
    }
}
