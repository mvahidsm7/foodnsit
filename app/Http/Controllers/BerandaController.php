<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Menu;
use App\Models\Bayar;
use App\Models\Pesan;
use App\Models\Detail;
use App\Charts\MenuChart;
use Illuminate\Http\Request;
use App\Charts\PenghasilanChart;
use Illuminate\Support\Facades\Auth;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class BerandaController extends Controller
{
    public function Index()
    {
        $tahun = date('Y');
        $bulan = date('m');

        $dataBulan = [];
        $dataTotalPendapatan = [];
        for ($i = 1; $i <= $bulan; $i++){
            $totalPendapatan = Bayar::whereYear('created_at', $tahun)
                ->whereMonth('created_at', $i)
                ->sum('total');

            $dataBulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalPendapatan[] = $totalPendapatan;
        }

        $dataBulan = [];
        $dataTotalPemesanan = [];
        for ($i = 1; $i <= $bulan; $i++){
            $totalPemesanan = Pesan::whereYear('created_at', $tahun)
                ->whereMonth('created_at', $i)
                ->count();

            $dataBulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalPemesanan[] = $totalPemesanan;
        }

        $dataBulan = [];
        $dataTotalPemesananSukses = [];
        $dataTotalPemesananGagal = [];
        for ($i = 1; $i <= $bulan; $i++){
            $totalPemesananSukses = Pesan::whereYear('created_at', $tahun)
                ->whereMonth('created_at', $i)
                ->where('status', 2) // Status 2 menandakan pemesanan berhasil
                ->count();

            $totalPemesananGagal = Pesan::whereYear('created_at', $tahun)
                ->whereMonth('created_at', $i)
                ->where('status', 4) // Status 4 menandakan pemesanan gagal
                ->count();

            $dataBulan[] = Carbon::create()->month($i)->format('F');
            $dataTotalPemesananSukses[] = $totalPemesananSukses;
            $dataTotalPemesananGagal[] = $totalPemesananGagal;
        }

        $data = [
            'dataBulan' => $dataBulan,
            'dataTotalPendapatan' => $dataTotalPendapatan,
            'dataTotalPemesananSukses' => $dataTotalPemesananSukses,
            'dataTotalPemesananGagal' => $dataTotalPemesananGagal
        ];

        $user = Auth::user();
        if (Auth::user() == null) {
            $menu = Menu::paginate(3);
            return view('index', compact('user', 'menu'));
        } else {
            if (Auth::user()->email == 'admin@food.com') {
                $pes = Pesan::with('pengguna', 'detail')->orderBy('updated_at', 'desc')->paginate(5);
                return view('admin.index', $data, compact('pes'));
            } else {
                $menu = Menu::paginate(3);
                return view('index', compact('user', 'menu'));
            }
        }
    }
}
