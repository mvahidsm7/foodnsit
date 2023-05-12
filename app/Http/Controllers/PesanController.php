<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function TampilReservasi(){
        $meja = Meja::all();
        return view('reservasi', compact('meja'));
    }

    public function Reservasi(Request $request){
        $res = new Reservasi;
        $res->no_meja = $request->no_meja;
        // $res->id_user = Auth::user()->id_user;
        $res->id_user = 1;
        $res->tanggal = $request->tanggal;
        $res->jam = $request->jam;
        $res->save();
        return redirect('');
    }
}
