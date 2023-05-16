@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>halaman</p>
                        <h1>Bayar</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    {{-- Pesanan --}}
    <div class="cart-section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
    {{-- Pesanan --}}
    <div class="cart-section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                        <h5>Nomer Meja :</h5>{{ $pes->no_meja }}@if ($pes->no_meja == false)
                            Tidak ada
                        @endif
                        </p>
                        <h5>Nomer Menu :</h5>{{ $pes->id_menu }}@if ($pes->id_menu == false)
                            Tidak ada
                        @endif
                        </p>
                        <h5>Jam :</h5>{{ $pes->jam }}
                        </p>
                        <h5>Tanggal :</h5>{{ $pes->tanggal }}
                        </p>
                        <p>
                            @if ($pes->status == false)
                                <form action="/bayar/{{ $pes->no_pes }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success">Lanjutkan Bayar</button>
                                </form><br>
                                <a href="/batal/{{ $pes->no_pes }}" class="btn btn-outline-danger">Batalkan
                                    Pesanan</a>
                            @else
                                <a href="/batal/{{ $pes->no_pes }}" class="btn btn-outline-danger">Batal</a>
                            @endif
                        </p>
                        <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
