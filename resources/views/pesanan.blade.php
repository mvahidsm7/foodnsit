@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>halaman</p>
                        <h1>Profil & Pesanan Anda</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    {{-- Profil --}}
    <div class="cart-section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body mx-5">
                    <center>
                        <h4 class="card-title">Profil</h4>
                    </center>
                    <hr>
                    <p class="card-text">
                    <h5>Nama :</h5>
                    </p>
                    <p class="card-text">{{ $user->name }}</p>
                    <p class="card-text">
                    <h5>Email :</h5>
                    </p>
                    <p class="card-text">{{ $user->email }}</p>
                    <div class="d-flex">
                        <a class="btn btn-outline-info mx-1 w-100" href="">Ganti Password</a>
                        <a class="btn btn-outline-danger w-100" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Profil --}}

    {{-- Pesanan --}}
    <div class="cart-section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body mx-5">
                    <center>
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                    @foreach ($pes as $pesanan)
                        <center>
                            <h5>Pesanan {{ $pesanan->kd_pes }}</h5>
                        </center>
                        <p>
                        <h5>Tanggal Pemesanan :</h5>{{ $pesanan->created_at }}
                        </p>
                        <p>
                        <h5>Jam :</h5>{{ $pesanan->jam }}
                        </p>
                        <p>
                        <h5>Tanggal :</h5>{{ $pesanan->tanggal }}
                        </p>
                        <p>
                        <h5>Status Pesanan :</h5>
                        @if ($pesanan->status == 1)
                            @if ($pesanan->expired_at < now())
                                Kadaluarsa
                            @else
                                Menunggu Pembayaran
                            @endif
                        @elseif ($pesanan->status == 2)
                            Dibayar
                        @elseif ($pesanan->status == 3)
                            Selesai
                        @else
                            Batal
                        @endif
                        </p>
                        <p>
                            @if ($pesanan->status == 1)
                                @if ($pesanan->expired_at > now())
                                    <a href="/bayar/{{ $pesanan->kd_pes }}" class="btn btn-outline-success">Detail
                                        Pesanan</a>
                                    <a href="/batal/{{ $pesanan->kd_pes }}" class="btn btn-outline-danger">Batalkan
                                        Pesanan</a>
                                @else
                                    <a href="/detail/{{ $pesanan->kd_pes }}" class="btn btn-outline-secondary">Detail
                                        Pesanan</a>
                                @endif
                            @elseif ($pesanan->status == 2)
                                <form action="selesai/{{ $pesanan->kd_pes }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success">Selesaikan
                                        Pesanan</button>
                                    <a href="/detail/{{ $pesanan->kd_pes }}" class="btn btn-outline-secondary">Detail
                                        Pesanan</a>
                                    <a href="/batal/{{ $pesanan->kd_pes }}" class="btn btn-outline-danger">Batalkan
                                        Pesanan</a>
                                </form>
                            @else
                                <a href="/detail/{{ $pesanan->kd_pes }}" class="btn btn-outline-secondary">Detail
                                    Pesanan</a>
                            @endif
                        </p>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
