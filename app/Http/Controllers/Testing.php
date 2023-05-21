<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Testing extends Controller
{
    public function index()
    {
        $menu = Menu::with('harga')->get();
        $harga = Menu::join('kategori', 'menu.kategori', '=', 'kategori.id_kategori')
            ->select('menu.nama','kategori.harga')
            ->get();
        // dd($harga);
        return view('test', compact('menu', 'harga'));
    }
}
