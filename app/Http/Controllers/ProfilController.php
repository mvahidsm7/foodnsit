<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Pesan;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = Auth::user();
        $pes = Pesan::all()->where('user', '=', $user->id);
        return view('pesanan', compact('user', 'pes'));
    }
    public function i()
    {
        $user = Auth::user();
        $pes = DB::table('pesan')
            ->where('id_user', $user->id_user)
            ->get();
        dd($pes);
    }
    public function batal($kd_pes)
    {
        $pes = Pesan::all()->where('kd_pes', '=', $kd_pes);
        $pes = $pes[0];
        return view('batal', compact('pes'));
    }
    public function BatalSukses($kd_pes)
    {
        $pes = Pesan::all()->where('kd_pes', '=', $kd_pes);
        $pes = $pes[0];
        if ($pes->no_meja == true) {
            DB::table('meja')
                ->where('no_meja', $pes->no_meja)
                ->update(['status' => 'tersedia']);
        }
        $pes->delete();
        return redirect('/profil');
    }
    public function detail($kd_pes)
    {
        $user = Auth::user();
        $pes = Pesan::all()->where('kd_pes', '=', $kd_pes);
        $pes = $pes[0];
        $menu = Menu::all()->where('id_menu', '=', $pes->id_menu);
        $menu = $menu[0];
        // dd($menu);
        return view('detail', compact('user', 'pes', 'menu'));
    }
}
