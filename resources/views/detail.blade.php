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
                    <h5>Kode Pesanan :</h5>
                    {{ $pes->kd_pes }}
                    </p>
                    <p>
                    <h5>Nomer Meja :</h5>{{ $pes->no_meja }}
                    </p>
                    <h5>Menu :</h5>
                    @foreach ($menu as $men)
                        {{ $men->menu->nama }} ({{ $men->qty }})
                        <br>
                    @endforeach
                    </p>
                    <h5>Jam :</h5>{{ $pes->jam }}
                    </p>
                    <h5>Tanggal :</h5>{{ $pes->tanggal }}
                    </p>
                    <hr>
                    <p>
                        <center>
                            @if ($pes->status == 1)
                                @if ($pes->expired_at < now())
                                    <form action="/expired/{{ $pes->kd_pes }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-secondary"
                                            style="width: 750px">Kembali</button>
                                    </form>
                                @else
                                    <a href="">bayar</a>
                                @endif
                            @elseif ($pes->status == 2)
                                <a href="/invoice/{{ $pes->kd_pes }}" class="btn btn-outline-info mb-3"
                                    style="width: 750px">Invoice</a>
                                <a href="/profil" class="btn btn-outline-secondary" style="width: 750px">Kembali</a>
                            @elseif ($pes->status == 3)
                                <a href="/invoice/{{ $pes->kd_pes }}" class="btn btn-outline-info mb-3"
                                    style="width: 750px">Invoice</a>
                                <a href="/profil" class="btn btn-outline-secondary" style="width: 750px">Kembali</a>
                            @else
                                <a href="/profil" class="btn btn-outline-secondary" style="width: 750px">Kembali</a>
                            @endif
                        </center>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
