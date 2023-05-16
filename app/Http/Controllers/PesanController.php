<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function TampilReservasi(){
        $meja = Meja::all();
        $menu = Menu::all();
        return view('reservasi', compact('meja', 'menu'));
    }

    public function Reservasi(Request $request){
        $pesan = new Pesan;
        $pesan->no_meja = $request->no_meja;
        $pesan->id_user = Auth::user()->id_user;
        $pesan->id_menu = $request->menu;
        $pesan->tanggal = $request->tanggal;
        $pesan->jam = $request->jam;
        $pesan->save();
        return redirect('');
    }
}
