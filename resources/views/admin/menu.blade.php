@extends('layouts.main')
@section('content')
    @extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Halaman</p>
                        <h1>Data Menu</h1>
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
                <td>Kode</td>
                <td>Nama</td>
                <td>Gambar</td>
                <td>Deskripsi</td>
                <td>Harga</td>
                <td>Lainnya</td>
            </tr>
            @foreach ($menu as $m)
                <tr>
                    <td>{{ $m->id_menu }}</td>
                    <td>{{ $m->nama }}</td>
                    <td><img src="{{ asset('') }}{{ $m->gambar }}" alt=""></td>
                    <td>{{ $m->deskripsi }}</td>
                    <td>{{ $m->harga }}</td>
                    <td>
                        <form action="/edit-menu/{{ $m->id_menu }}" method="post">@csrf<button type="submit">edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
        <form action="/tambah-menu" method="post">
            @csrf
            <button class="btn btn-outline-success" type="submit">tambah</button>
        </form>
    </div>
    {{-- end table --}}
@endsection

@endsection
