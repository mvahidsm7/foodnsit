@extends('layouts.main')
@section('content')
    @if (Auth::user()->email !== 'admin@food.com')
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
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Halaman</p>
                            <h1>Data Pesanan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->
        {{-- table --}}
        <div class="container mt-150 mb-150">
            <table class="table">
                <tr class="table-active">
                    <td>ID Pesanan</td>
                    <td>Nama</td>
                    <td>Nomor Meja</td>
                    <td>Menu</td>
                    <td>Status</td>
                    <td>Lainnya</td>
                </tr>
                @foreach (App\Models\Pesan::with('pengguna', 'bayar')->where('status', '=', 2)->orWhere('status', '=', 3)->get() as $p)
                    <tr>
                        <td>{{ $p->kd_pes }}</td>
                        <td>{{ $p->pengguna[0]->name }}</td>
                        <td>{{ $p->no_meja }}</td>
                        <td>{{ $p->menu[0]->nama }}</td>
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
                            @if ($p->status == 1)
                                <a href="/batal/{{ $p->no_pes }}" class="btn btn-outline-danger">batalkan</a>
                            @elseif ($p->status == 2)
                                <a href="" class="btn btn-outline-success">selesaikan</a>
                                <a href="/batal/{{ $p->no_pes }}" class="btn btn-outline-danger">batalkan</a>
                            @else
                                Selesai
                            @endif
                        </td>
                    </tr>
                @endforeach
                {{-- @foreach ($pes as $p)
                    <tr>
                        @dump($p)
                        <td>{{ $p->kd_pes }}</td>
                        <td>{{ $p->pengguna[0]->name }}</td>
                        <td>{{ $p->no_meja }}</td>
                        <td>{{ $p->menu[0]->nama }}</td>
                        <td>
                            @if ($m->status == 1)
                                Menunggu Pembayaran
                            @elseif ($m->status == 2)
                                Dibayar
                            @else
                                Selesai
                            @endif
                        </td>
                        <td>
                            @if ($m->status == 1)
                                <a href="/batal/{{ $m->no_pes }}" class="btn btn-outline-danger">batalkan</a>
                            @elseif ($m->status == 2)
                                <a href="" class="btn btn-outline-success">selesaikan</a>
                                <a href="/batal/{{ $m->no_pes }}" class="btn btn-outline-danger">batalkan</a>
                            @else
                                Selesai
                            @endif
                        </td>
                    </tr>
                @endforeach --}}
            </table>
            <form action="/print-pesanan" method="get">
                @csrf
                <button class="btn btn-outline-danger" type="submit" href="{{ URL::to('/print-pesanan') }}">Cetak</button>
            </form>
        </div>
        {{-- end table --}}
    @endif
@endsection
