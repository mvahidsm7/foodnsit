@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Detail</p>
                        <h1>Pesanan</h1>
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
                    <h5>Kode Pesanan :</h5>{{ $pes->kd_pes }}
                    </p>
                    <p>
                    <h5>Nomer Meja :</h5>{{ $pes->no_meja }}
                    </p>
                    <h5>Menu :</h5>@foreach ($menu as $men)
                        {{ $men->nama }}<br>
                    @endforeach
                    </p>
                    <h5>Jam :</h5>{{ $pes->jam }}
                    </p>
                    <h5>Tanggal :</h5>{{ $pes->tanggal }}
                    </p>
                    <hr>
                    <p>
                        @if ($pes->status == 1)
                            {{-- <form action="/bayar/{{ $pes->kd_pes }}/sukses" method="post"> --}}
                            @csrf
                            <center>
                                <button type="submit" class="btn btn-outline-success" id="pay-button"
                                    style="width: 750px">Bayar</button>
                                @dump($pes->kd_pes)
                            </center>
                            {{-- </form> --}}
                        @elseif ($pes->status == 2)
                            <center>
                                <a href="/batal/{{ $pes->kd_pes }}" class="btn btn-outline-danger"
                                    style="width: 375px">Batalkan Pesanan</a>
                                <a href="{{ $pes->kd_pes }}/selesain" class="btn btn-outline-primary"
                                    style="width: 375px">Selesaikan Pesanan</a>
                            </center>
                        @endif
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
