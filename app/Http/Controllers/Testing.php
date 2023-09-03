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
        $det = [['id_menu' => 'MN001', 'qty' => 2], ['id_menu' => 'MN001', 'qty' => 2], ['id_menu' => 'MN001', 'qty' => 2]];
        // dd($det[0]['qty']);
        return view('test', compact('det'));
    }

    public function form(Request $r)
    {
        $men = count($r->menu);
        dd($men);
        $kode = Str::random(6);
        $kode = 'P' . time() . $kode;
        $pesanan = Pesan::create(
            [
                'kd_pes' => $kode,
                'tanggal' => '2023-09-02',
                'jam' => '11:00',
                'user' => Auth::user()->id,
                'no_meja' => $r->no_meja,
            ]
        );
        
        if ($r->menu != 0) {
            $detail = Detail::create(
                [
                    'kd_pes' => $pesanan->kd_pes,
                    'id_menu' => 'MN001',
                    'qty' => $r->menu,
                ]
            );
        }

        return redirect('/test');
    }
}
