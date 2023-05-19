@extends('layouts.main')
@section('content')
    @if ($user->name != 'admin')

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
                    <td>Nomer</td>
                    <td>ID pengguna</td>
                    <td>No Meja</td>
                    <td>Menu</td>
                    <td>Status</td>
                    <td>Lainnya</td>
                </tr>
                @foreach ($pes as $m)
                    <tr>
                        <td>{{ $m->no_pes }}</td>
                        <td>{{ $m->id_user }}</td>
                        <td>{{ $m->no_meja }}</td>
                        <td>{{ $m->id_menu }}</td>
                        <td>{{ $m->status }}</td>
                        <td><a href="meja/{{ $m->no_meja }}edit">edit</a></td>
                    </tr>
                @endforeach
            </table>
            <form action="/print-pesanan" method="get">
                @csrf
                <button class="btn btn-outline-danger" type="submit"
                    href="{{ URL::to('/print-pesanan') }}">Print</button>
            </form>
        </div>
        {{-- end table --}}
    @endif
@endsection
