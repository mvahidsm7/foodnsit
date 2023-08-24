<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function setReservasi()
    {
        return view('setreservasi');
    }
    public function TampilReservasi(Request $r)
    {
        $meja = Meja::all()->where('kapasitas', '>=', $r->jumlah);
        $menu = Menu::all();
        return view('reservasi', compact('meja', 'menu'));
    }

    public function Reservasi(Request $request)
    {
        request()->validate([
            'no_meja' => 'required',
            'menu' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ]);
        $kode = Str::random(6);
        $pesan = new Pesan;
        // dd('P' . time() . $kode);
        $pesan->kd_pes = 'P' . time() . $kode;
        $pesan->no_meja = $request->no_meja;
        $pesan->pengguna = Auth::user()->id;
        $pesan->id_menu = $request->menu;
        $pesan->tanggal = $request->tanggal;
        $pesan->jam = $request->jam;
        $pesan->save();
        return redirect('sukses');
    }
    public function Sukses()
    {
        return view('sukses');
    }
}
