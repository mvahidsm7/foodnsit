@extends('layouts.admin1')
@section('content')
<style>
    select {
       -webkit-appearance:none;
       -moz-appearance:none;
       -ms-appearance:none;
       appearance:none;
       outline:0;
       box-shadow:none;
       border:0!important;
       background: #5c6664;
       background-image: none;
       flex: 1;
       padding: 0 .5em;
       color:#fff;
       cursor:pointer;
       font-size: .8em;
       font-family: 'Open Sans', sans-serif;
    }
    select::-ms-expand {
       display: none;
    }
    .select {
       position: relative;
       display: flex;
       width: 10em;
       height: 2,5em;
       line-height: 3;
       background: #5c6664;
       overflow: hidden;
       border-radius: .25em;
    }
    .select::after {
       content: '\25BC';
       position: absolute;
       top: 0;
       right: 0;
       padding: 0 1em;
       background: #2b2e2e;
       cursor:pointer;
       pointer-events:none;
       transition:.25s all ease;
    }
    .select:hover::after {
       color: #23b499;
    }
    </style>
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
    <div class="content-wrapper">
        <div class="container mt-150 mb-150">
            <form action="/data-pesanan" method="get">
                @csrf
        <div class="row mb-3">
            <div class="col-sm-3">
                <label for="" class="form-label">Status</label>
                <div class="select">
                    <select name="status" id="format">
                        <option value="1" selected="{{isset($_GET['status']) && $_GET['status'] == '1'}}">Menunggu</option>
                        <option value="2" selected="{{isset($_GET['status']) && $_GET['status'] == '2'}}">Dibayar</option>
                        <option value="3" selected="{{isset($_GET['status']) && $_GET['status'] == '3'}}">Selesai</option>
                        <option value="4" selected="{{isset($_GET['status']) && $_GET['status'] == '4'}}">Batal</option>
                        <option selected disabled>Pilih Status</option>
                    </select>
                 </div>
                <br>
            </div>
            <div class="col-sm-3">
                <label class="form-label">Dari Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_dari" value="{{ request('tanggal_dari') }}">
                <br>
            </div>
            <div class="col-sm-3">
                <label class="form-label">Sampai Tanggal</label>
                    <input type="date" class="form-control" name="tanggal_sampai" value="{{ request('tanggal_sampai') }}">
                <br>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary mt-4">Search</button>
            </div>
        </div>
        </form>
            <table class="table">
                <tr class="table-active">
                    <td>Nama</td>
                    <td>ID Pesanan</td>
                    <td>Tanggal Pemesanan</td>
                    <td>Nomor Meja</td>
                    <td>Menu</td>
                    <td>Total</td>
                    <td>Jam & Tanggal</td>
                    <td>Status</td>
                </tr>
                @foreach ($pes as $p)
                    <tr>
                        <td>{{ $p->pengguna[0]->name }}</td>
                        <td>{{ $p->kd_pes }}</td>
                        <td>{{ $p->created_at->format('Y-m-d') }}</td>
                        <td>{{ $p->no_meja }}</td>
                        <td>
                            @foreach ($p->detail as $item)
                            {{ App\Models\Menu::select('nama')->where('id_menu', $item->id_menu)->get()[0]->nama }}
                            ({{ $item->qty }})<br>
                            @endforeach
                        </td>
                        {{-- {{-- <td>{{ $p->menu[0]->nama }}</td> --}}
                        <td>
                            @if ($p->bayar)
                                {{ $p->bayar->total }}
                            @endif
                        </td>
                        <td>{{ $p->jam }} {{ $p->tanggal }}</td>
                        <td>
                            @if ($p->status == 1)
                            <div class="badge badge-outline-warning">Menunggu</div>
                            @elseif ($p->status == 2)
                            <div class="badge badge-outline-success">Dibayar</div>
                            @else
                            <div class="badge badge-outline-primary">Selesai</div>
                        @endif
                        </td>
                    </tr>
                @endforeach
            </table>
            <form action="/print-pesanan" method="get">
                @csrf
                <button class="btn btn-outline-danger" type="submit" href="{{ URL::to('/print-pesanan') }}">Cetak</button>
            </form>
        </div>
        {{-- end table --}}
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit 2023</span>
        </div>
    </footer>
</div>
    @endif
@endsection