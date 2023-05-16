@extends('layouts.main')
@section('content')
    @if ($user->name == 'admin')
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>halaman</p>
                            <h1>Admin</h1>
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
                        <p class="card-text">
                        <h5>Nama :</h5>
                        </p>
                        <p class="card-text">
                            {{ $user->name }}
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        </p>
                        <p class="card-text">
                        <h5>Pilihan :</h5>
                        </p>
                        <p class="card-text">
                            <a href="/admin/meja" class="btn btn-outline-primary">data meja</a>
                            <a href="/admin/menu" class="btn btn-outline-info">data menu</a>
                            <a href="/data-pesanan" class="btn btn-outline-info">data pesanan</a>
                            <a href="/" class="btn btn-outline-success">lainnya</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Profil --}}
    @else
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
                                <h5>Pesanan {{ $p->no_pes }}</h5>
                                </p>
                            </center>

                            <h5>Nomer Meja :</h5>{{ $p->no_meja }}@if ($p->no_meja == false)
                                Tidak Memesan
                            @endif
                            </p>
                            <h5>Menu :</h5>{{ $menu[0]->nama }}@if ($p->id_menu == false)
                                Tidak Memesan
                            @endif
                            </p>
                            <h5>Jam :</h5>{{ $p->jam }}
                            </p>
                            <h5>Tanggal :</h5>{{ $p->tanggal }}
                            </p>
                            <p>
                                @if ($p->status == false)
                                    <a href="/bayar/{{ $p->no_pes }}" class="btn btn-outline-success">Lanjutkan Bayar</a>
                                    <a href="/batal/{{ $p->no_pes }}" class="btn btn-outline-danger">Batalkan Pesanan</a>
                                @else
                                    <a href="/batal/{{ $p->no_pes }}" class="btn btn-outline-danger">Batalkan Pesanan</a>
                                @endif
                            </p>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- end Pesanan --}}
    @endif
@endsection
