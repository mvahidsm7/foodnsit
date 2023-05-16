<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Meja
    public function TampilMeja()
    {
        $meja = Meja::all();
        return view('admin_meja', compact('meja'));
    }
    public function TambahMejaView()
    {
        return view('tambah-meja');
    }
    public function TambahMeja(Request $request)
    {
        Meja::create($request->except('_token', 'submit'));
        return redirect('/admin/meja');
    }
    public function EditMeja($no_meja)
    {
        $meja = Meja::find($no_meja);
        return view('edit-meja');
    }
    //Menu
    public function TampilMenu()
    {
        $menu = Menu::all();
        return view('admin_menu', compact('menu'));
    }
    public function TambahMenuView()
    {
        return view('tambah-menu');
    }
    public function TambahMenu(Request $request)
    {
        Menu::create($request->except('_token', 'submit'));
        return redirect('/admin/menu');
    }
}
