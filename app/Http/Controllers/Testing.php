<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesan;
use App\Models\Detail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Testing extends Controller
{
    public function index()
    {
        // $tes = Pesan::with('bayar')->get();
        // $tes = $tes[0];
        // $pes = Pesan::with('pengguna')->where('status', '=', 2)->orWhere('status', '=', 3)->get();
        // $char = '01234567890';
        // $numb = strlen($char);
        // $length = 4;
        // $kode = '';
        // while (strlen($kode) < $length) {
        //     $position = rand(0, 10);
        //     $chara = $char[$position];
        //     $kode = $kode.$chara;
        // }
        // $code = date('now').$kode;
        // dd(date('now').$kode);
        // dd($tes->bayar->total);
        
        $pesan = Pesan::with('coba')->get();
        dd($pesan);
        $det = Pesan::with('detail')->get();
        $qty = 5;
        $id = $det[0]->detail->id_menu;
        $menu = Menu::where('id_menu', $id)->get();
        $menu = $menu[0];
        $total = $menu->harga * $qty;
        return view('test');
    }

    public function form(Request $r)
    {
        $men = count($r->menu);
        // dd($r['menu']);
        $kode = Str::random(6);
        $kode = 'P' . time() . $kode;
        $pesanan = Pesan::create(
            [
                'kd_pes' => $kode,
                'tanggal' => '2023-09-02',
                'jam' => '11:00',
                'user' => 1,
                'no_meja' => $r->no_meja,
            ]
        );
        for ($i=1; $i < $men; $i++) {
            if ($r['menu'][$i - 1] != 0) {
                $detail = Detail::create(
                    [
                        'kd_pes' => $pesanan->kd_pes,
                        'id_menu' => 'MN' . $i,
                        'qty' => $r['menu'][$i - 1],
                    ]
                );
            }
        }


        return redirect('/test');
    }
}
