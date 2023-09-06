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
        $user = Auth::user();
        $pes = Pesan::where('kd_pes', '=', $kd_pes)->get();
        $pes = $pes[0];
        $det = Detail::where('kd_pes', $kd_pes)->get();

        $detmen = Detail::with('menu')->where('kd_pes', '=', $kd_pes)->get();
        foreach($detmen as $d){
            $detail[] = $d;
        }
        $detmen = $detail;
        for ($i=0; $i < count($det); $i++) {
            $menu[] = Menu::select('harga')->where('id_menu', $det[$i]->id_menu)->get();
        }
        // $total = array_sum($total);
        foreach($menu as $men){
            $harga[] = $men[0]->harga;
        }
        $total = array_sum($harga);
        // $tot = array_sum();
        // dd($tot);
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
                'order_id' => $pes->kd_pes,
                'gross_amount' => $total,
            ),
            'customer_details' => array(
                'first_name' => $user->name,
            ),
        );
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('bayar', compact('snapToken', 'pes', 'men', 'total', 'menu', 'detmen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($kd_pes, Request $request)
    {
        $det = Detail::where('kd_pes', $kd_pes)->get();
        for ($i=0; $i < count($det); $i++) {
            $menu[] = Menu::select('harga')->where('id_menu', $det[$i]->id_menu)->get();
        }
        foreach($menu as $men){
            $harga[] = $men[0]->harga;
        }
        $total = array_sum($harga);
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
        $pes = Pesan::where('kd_pes', '=', $kd_pes)->get();
        $pes = $pes[0];
        $bayar = new Bayar;
        $bayar->user = $user->id;
        $bayar->kd_pes = $pes->kd_pes;
        $bayar->no_pembayaran = $code;
        $bayar->total = $total;
        DB::table('pesan')->where('kd_pes', $pes->kd_pes)->update(array('status' => 2));
        DB::table('meja')->where('no_meja', $pes->no_meja)->update(array('status' => 'dipesan'));
        $bayar->save();
        return redirect('');
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
