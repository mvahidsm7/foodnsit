<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $user = Auth::user();
        $pes = DB::table('pesan')->where('id_user', $user->id_user)->get();
        // dd($pes);
        return view('pesanan', compact('user', 'pes'));
    }
    public function batal($no_pes){
        $pes = Pesan::find($no_pes);
        return view('batal', compact('pes'));
    }
}
