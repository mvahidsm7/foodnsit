<?php

namespace App\Http\Controllers;

use App\Models\Bayar;
use App\Http\Requests\StoreBayarRequest;
use App\Http\Requests\UpdateBayarRequest;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pesan;
use App\Models\Detail;
use Database\Seeders\ReservasiSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BayarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index($kd_pes, Request $request)
    {
        $pesanan = Pesan::where('kd_pes', $kd_pes)->get();
        $detail = Detail::with('menu')->where('kd_pes', $kd_pes)->get();
        foreach ($detail as $key) {
           $harga[] = $key->menu->harga;
           $qty[] = $key->qty;
        }
        $total = 0;
        foreach($harga as $key => $value){
            $total += ($value * $qty[$key]);
        }
         // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $pesanan[0]->kd_pes,
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => Auth::user()->name,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('bayar', compact('snapToken', 'pesanan',  'total', 'detail'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kd_pes, Request $request)
    {
        $pesanan = Pesan::where('kd_pes', $kd_pes)->get();
        $detail = Detail::with('menu')->where('kd_pes', $kd_pes)->get();
        foreach ($detail as $key) {
           $harga[] = $key->menu->harga;
           $qty[] = $key->qty;
        }
        $total = 0;
        foreach($harga as $key => $value){
            $total += ($value * $qty[$key]);
        }
        $char = '01234567890';
        $numb = strlen($char);
        $length = 2;
        $kode = '';
        while (strlen($kode) < $length) {
            $position = rand(0, 10);
            $chara = $char[$position];
            $kode = $kode . $chara;
        }
        $code = date('now') . $kode;
        $user = Auth::user();
        $pes = $pesanan[0];
        $bayar = new Bayar;
        $bayar->user = $user->id;
        $bayar->kd_pes = $pes->kd_pes;
        $bayar->no_pembayaran = $code;
        $bayar->total = $total;
        DB::table('pesan')->where('kd_pes', $pes->kd_pes)->update(array('status' => 2));
        DB::table('meja')->where('no_meja', $pes->no_meja)->update(array('status' => 'dipesan'));
        $bayar->save();
        return redirect('email');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBayarRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bayar $bayar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bayar $bayar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBayarRequest $request, Bayar $bayar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bayar $bayar)
    {
        //
    }
}
