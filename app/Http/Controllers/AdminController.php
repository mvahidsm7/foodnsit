<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Meja;
use App\Models\Menu;
use App\Models\User;
use App\Models\Pesan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Meja
    public function TampilMeja()
    {
        $meja = Meja::all();
        return view('admin.meja', compact('meja'));
    }
    public function TambahMejaView()
    {
        return view('admin.tambah-meja');
    }
    public function TambahMeja(Request $request)
    {
        $request->validate(
            [
                'no_meja' => 'required',
                'kapasitas' => 'required'
            ]
        );
        $nomor = $request->no_meja;
        $kapasitas = $request->kapasitas;
        Meja::create(
            [
                'no_meja' => 'MJ' . $nomor,
                'kapasitas' => $kapasitas
            ]
        );
        return redirect('/admin/meja');
    }
    public function EditMeja($no_meja)
    {
        $meja = Meja::find($no_meja);
        return view('edit-meja');
    }
    //Menu
    public function TampilMenu()
    {
        $menu = Menu::all();
        return view('admin.menu', compact('menu'));
    }
    public function TambahMenuView()
    {
        $kategori = Kategori::all();
        return view('admin.tambah-menu', compact('kategori'));
    }
    public function TambahMenu(Request $request)
    {
        $request->validate([
            'id_menu' => 'required',
            'nama' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori' => 'required'
        ]);

        // dd($request);

        $namaGambar = $request->id_menu . '-' . $request->nama . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/products'), $namaGambar);

        Menu::create([
            'id_menu' => 'MN' . $request->id_menu,
            'nama' => $request->nama,
            'gambar' => 'assets\\img\\products\\' . $namaGambar,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'kategori' => $request->kategori
        ]);
        return redirect('/admin/menu');
    }

    public function editMenu($id_menu)
    {
        $menu = Menu::where('id_menu', $id_menu)->get()[0];
        $kategori = Kategori::all();
        return view('admin.edit-menu', compact('menu', 'kategori'));
    }
    public function UpdateMenu(Request $request)
    {
        $request->validate([
            'id_menu' => 'required',
            'nama' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required',
            'harga' => 'required',
            'kategori' => 'required'
        ]);

        // dd($request);
        if ($request->gambar) {
            $namaGambar = $request->id_menu . '-' . $request->nama . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/products'), $namaGambar);
        }

        $menu = Menu::where('id_menu', $request->id_menu);

        if ($request->gambar) {
            $menu->update([
                'nama' => $request->nama,
                'gambar' => 'assets\\img\\products\\' . $namaGambar,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori
            ]);
        } else {
            $menu->update([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'kategori' => $request->kategori
            ]);
        }

        return redirect('/admin/menu');
    }

    public function hapus($id_menu)
    {
        $menu = Menu::where('id_menu', $id_menu);
        $menu->delete();
        return redirect()->back()->with('success', 'Item berhasil dihapus');
    }

    public function TampilPesanan(Request $request)
    {
        $user = Auth::user();
        $pes = Pesan::query()->with('pengguna');

        if ($request->has('status')) {
            $pes->where('status', $request->status);
        }

        if ($request->has('tanggal_dari') && $request->has('tanggal_sampai')) {
            $pes->whereBetween('created_at', [
                $request->tanggal_dari,
                $request->tanggal_sampai . ' 23:59:59'
            ]);
        }

        $pes = $pes->get();

        return view('admin.pesanan', compact('pes', 'user'));
    }

    public function pdf()
    {
        $pes = Pesan::with('pengguna', 'bayar', 'detail')->where('status', '=', 2)->orWhere('status', '=', 3)->get();
        $pes = Pdf::loadview('laporan', ['pes' => $pes]);
        return $pes->stream('laporan-pesanan.pdf');
    }

    public function TampilUser()
    {
        // $users = User::select('users.*', DB::raw('COUNT(pesan.id) as pesan_count'))
        // ->leftJoin('pesan', 'users.id', '=', 'pesan.user')
        // ->where('users.email', '!=', 'admin@food.com')
        // ->groupBy('users.id', 'users.name', 'users.email')
        // ->get();
        $users = User::where('email', '!=', 'admin@food.com')->withCount('pesanan')->get();
        return view('admin.user', compact('users'));
    }
}
