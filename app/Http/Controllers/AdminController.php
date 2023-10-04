<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //Meja
    public function TampilMeja()
    {
        $meja = Meja::all();
        return view('admin.meja', compact('meja'));
    }
    public function TambahMejaView()
    {
        return view('admin.tambah-meja');
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
        return view('admin.menu', compact('menu'));
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

    public function editMenu($id_menu)
    {
        dd($id_menu);
    }
    public function UpdateMenu()
    {
    }

    public function TampilPesanan()
    {
        $user = Auth::user();
        $pes = Pesan::with('pengguna')->where('status', '=', 2)->orWhere('status', '=', 3)->get();
        // $pes = Pesan::all();
        $pes = $pes[0];
        // dd($pes);
        return view('admin.pesanan', compact('pes', 'user'));
    }

    public function pdf()
    {
        $pes = Pesan::with('pengguna', 'bayar', 'detail')->where('status', '=', 2)->orWhere('status', '=', 3)->get();
        $pes = Pdf::loadview('laporan', ['pes' => $pes]);
        return $pes->download('laporan-pesanan.pdf');
    }
}
