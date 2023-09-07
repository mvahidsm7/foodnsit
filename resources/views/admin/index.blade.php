@extends('layouts.admin')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>GW</p>
                        <h1>atmin</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="mt-5 mb-150">
        <div class="container">
            <div class="mt-1 mb-5">
                <a href="/admin/meja" class="btn btn-outline-primary mt-2 mb-2" style="width: 100%">data meja</a>
                <a href="/admin/menu" class="btn btn-outline-info mt-2 mb-2" style="width: 100%">data menu</a>
                <a href="/data-pesanan" class="btn btn-outline-info mt-2 mb-2" style="width: 100%">rekap data pesanan</a>
            </div>

            <div class="mt-1 mb-5">
                <h3>Pesanan</h3>
                <table class="table">
                    <tr class="table-active">
                        <td>Kode Pesanan</td>
                        <td>Nama</td>
                        <td>Tanggal & Jam</td>
                        <td>Nomor Meja</td>
                        <td>Menu</td>
                        <td>Status</td>
                        <td>Lainnya</td>
                    </tr>
                    @foreach ($pes as $p)
                        <tr>
                            <td>{{ $p->kd_pes }}</td>
                            <td>{{ $p->pengguna[0]->name }}</td>
                            <td>{{ $p->jam }} {{ $p->tanggal }}</td>
                            <td>{{ $p->no_meja }}</td>
                            <td>
                                @foreach ($p->detail as $item)
                                    {{ App\Models\Menu::select('nama')->where('id_menu', $item->id_menu)->get()[0]->nama }}
                                    ({{ $item->qty }}),
                                @endforeach
                            </td>
                            {{-- {{-- <td>{{ $p->menu[0]->nama }}</td> --}}
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
                                <div class="row">
                                    <a href="" class="btn btn-outline-success col mb-1">selesaikan</a>
                                    <a href="/batal/{{ $p->no_pes }}" class="btn btn-outline-danger col">batalkan</a>
                                </div>
                                @else
                                    Selesai
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
