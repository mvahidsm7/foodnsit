<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Bayar;
use App\Models\Pesan;
use App\Models\Detail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        DB::table('pesan')->where('kd_pes', $kd_pes)->update(array('status' => 4));
        DB::table('meja')->where('no_meja', $pes->no_meja)->update(array('status' => 'tersedia'));
        return redirect()->back()->with('success', '');
    }
    public function detail($kd_pes)
    {
        $user = Auth::user();
        $pes = Pesan::where('kd_pes', '=', $kd_pes)->get();
        $pes = $pes[0];
        $det = Detail::with('menu')->where('kd_pes', '=', $kd_pes)->get();
        foreach ($det as $d) {
            $detail[] = $d;
        }
        $menu = $detail;
        // dd($menu);
        return view('detail', compact('user', 'pes', 'menu'));
    }
    public function invoice($kd_pes)
    {
        $user = Auth::user();
        $bayar = Bayar::where('kd_pes', '=', $kd_pes)->get();
        $pes = Pesan::where('kd_pes', '=', $kd_pes)->get();
        $pes = $pes[0];
        $bayar = $bayar[0];
        $det = Detail::with('menu')->where('kd_pes', '=', $kd_pes)->get();
        foreach ($det as $d) {
            $detail[] = $d;
        }
        $menu = $detail;
        $noUrut = 1;
        return view('invoice', compact('user', 'pes', 'menu', 'bayar', 'noUrut'));
    }

    public function changePassword()
    {
        return view('auth.change-password');
    }
    public function processChangePassword(Request $request)
    {
        //cek password lama
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with('error', 'Password lama tidak cocok');
        }
        //cek password baru
        if ($request->new_password != $request->repeat_password) {
            return back()->with('error', 'Password baru dan konfirmasi tidak cocok');
        }

        auth()->user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/profil')->with('success', 'Password berhasil diubah');
    }
}
