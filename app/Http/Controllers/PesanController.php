<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $meja = Meja::all()->where('kapasitas', '=', $r->jumlah);
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
        $men = count($request->menu);
        $kode = Str::random(6);
        $kode = 'P' . time() . $kode;
        $pesanan = Pesan::create(
            [
                'kd_pes' => $kode,
                'tanggal' => $request->tanggal,
                'jam' => $request->jam,
                'user' => Auth::user()->id,
                'no_meja' => $request->no_meja,
                'expired_at' => now()->addHours(2)
            ]
        );
        // dd($request);
        DB::table('meja')->where('no_meja', $pesanan->no_meja)->update(array('status' => 'dipesan'));
        $menu = Menu::all();
        foreach ($request['menu'] as $key => $value) {
            if ($value) {
                $id_menu = $request -> id_menu[$key];
                // dd($id_menu);
                $harga =  Menu::where('id_menu', ($id_menu))->first();
                $detail = Detail::create(
                    [
                        'kd_pes' => $pesanan->kd_pes,
                        'id_menu' => $id_menu,
                        'harga' => $harga->harga,
                        'qty' => $value,
                    ]
                );
            }
        }
        return redirect('sukses');
    }

    public function Sukses()
    {
        return view('sukses');
    }
    
    public function expired($kd_pes)
    {
        $pesanan = Pesan::where('kd_pes', $kd_pes)->get();
        $pesanan = $pesanan[0];
        DB::table('pesan')->where('kd_pes', $kd_pes)->update(array('status' => 4));
        DB::table('meja')->where('no_meja', $pesanan->no_meja)->update(array('status' => 'tersedia'));
        return redirect('/profil');
    }

    public function selesai($kd_pes)
    {
        $pesanan = Pesan::where('kd_pes', $kd_pes)->get();
        $pesanan = $pesanan[0];
        DB::table('pesan')->where('kd_pes', $kd_pes)->update(array('status' => 3));
        DB::table('meja')->where('no_meja', $pesanan->no_meja)->update(array('status' => 'tersedia'));
        return redirect('/');
    }
}
