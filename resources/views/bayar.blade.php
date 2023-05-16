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
                    <p>
                    <h5>Kode Pembayaran :</h5>
                    PPFNS001002003 <br>
                    <p>
                    <h5>Nomer Meja :</h5>{{ $pes->no_meja }}
                    @if ($pes->no_meja == false)
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
                    <h3>Total :
                        @if ($pes->no_meja == false)
                            {{ $men }}
                        @endif
                        @if ($pes->id_menu == false)
                            {{ $mej }}
                        @endif
                        @if ($pes->id_menu == true && $pes->no_meja == true)
                            {{ $tot }}
                        @endif
                    </h3>
                    </p>
                    <hr>
                    <i>Bayar melalui bank dengan memasukkan kode tersebut di pembayaran lainnya</i>
                    <hr>
                    </p>
                    <p>
                    <form action="/bayar/{{ $pes->no_pes }}/sukses" method="post">
                        @csrf
                        <center>
                            <button type="submit" class="btn btn-outline-success" style="width: 750px">Bayar</button>
                        </center>
                    </form>

                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
