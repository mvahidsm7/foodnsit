@extends('layouts.admin1')
@section('content')
    @if (Auth::user()->email != 'admin@food.com')
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Halaman ini</p>
                            <h1>Tidak Tersedia Untuk Anda</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->
        <!-- error section -->
        <div class="full-height-section error-section">
            <div class="full-height-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 text-center">
                            <div class="error-text">
                                <i class="far fa-sad-cry"></i>
                                <h1>Oops! Akses di tolak.</h1>
                                <p>Halaman yang kamu tuju tidak tersedia.</p>
                                <a href="/" class="boxed-btn">Beranda</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end error section -->
    @else
        <div class="main-panel">
            <div class="container mt-150 mb-150">
                <table class="table">
                    <tr class="table-active">
                        <td>ID Pesanan</td>
                        <td>Nama</td>
                        <td>Tanggal & Jam</td>
                        <td>Nomor Meja</td>
                        <td>Menu</td>
                        <td>Status</td>
                        <td>Total</td>
                    </tr>
                    @foreach (App\Models\Pesan::with('pengguna', 'bayar', 'detail')->where('status', '=', 2)->orWhere('status', '=', 3)->get() as $p)
                        <tr>
                            <td>{{ $p->kd_pes }}</td>
                            <td>{{ $p->pengguna[0]->name }}</td>
                            <td>{{ $p->jam }} {{ $p->tanggal }}</td>
                            <td>{{ $p->no_meja }}</td>
                            <td>
                                @foreach ($p->detail as $item)
                                    {{ App\Models\Menu::select('nama')->where('id_menu', $item->id_menu)->get()[0]->nama }}
                                    ({{ $item->qty }})
                                    ,
                                @endforeach
                            </td>
                            <td>
                                @if ($p->status == 1)
                                    Menunggu Pembayaran
                                @elseif ($p->status == 2)
                                    Dibayar
                                @else
                                    Selesai
                                @endif
                            </td>
                            <td>
                                {{ $p->bayar->total }}
                            </td>
                        </tr>
                    @endforeach
                </table>
                <form action="/print-pesanan" method="get">
                    @csrf
                    <button class="btn btn-outline-danger" type="submit"
                        href="{{ URL::to('/print-pesanan') }}">Cetak</button>
                </form>
            </div>
            {{-- end table --}}
            {{-- <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit
                        2023</span>
                </div>
            </footer> --}}
        </div>
    @endif
@endsection
