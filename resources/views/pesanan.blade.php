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
                <div class="card-body">
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
                    <a class="btn btn-outline-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
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
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                    @foreach ($pes as $p)
                        <center>
                            <p class="card-text">
                            <h5>Pesanan {{ $p->kd_pes }}</h5>
                            </p>
                        </center>
                        </p>
                        <h5>Jam :</h5>{{ $p->jam }}
                        </p>
                        <h5>Tanggal :</h5>{{ $p->tanggal }}
                        </p>
                        <p>
                        <h5>Status Pesanan :</h5>
                        @if ($p->status == 1)
                            @if ($p->expired_at < now())
                                Kadaluarsa
                            @else
                                Menunggu Pembayaran
                            @endif
                        @elseif ($p->status == 2)
                            Dibayar
                        @elseif ($p->status == 3)
                            Selesai
                        @else
                            Batal
                        @endif
                        </p>
                        <p>
                            @if ($p->status == 1)
                                @if ($p->expired_at > now())
                                    <a href="/bayar/{{ $p->kd_pes }}" class="btn btn-outline-success">Detail
                                        Pesanan</a>
                                    <a href="/batal/{{ $p->kd_pes }}" class="btn btn-outline-danger">Batalkan
                                        Pesanan</a>
                                @else
                                    <a href="/detail/{{ $p->kd_pes }}" class="btn btn-outline-secondary">Detail
                                        Pesanan</a>
                                @endif
                            @elseif ($p->status == 2)
                                <a href="{{ $p->kd_pes }}/selesain" class="btn btn-outline-success">Selesaikan
                                    Pesanan</a>
                                <a href="/detail/{{ $p->kd_pes }}" class="btn btn-outline-secondary">Detail
                                    Pesanan</a>
                                <a href="/batal/{{ $p->kd_pes }}" class="btn btn-outline-danger">Batalkan
                                    Pesanan</a>
                            @else
                                <a href="/detail/{{ $p->kd_pes }}" class="btn btn-outline-secondary">Detail
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
