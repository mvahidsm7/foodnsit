@extends('layouts.admin1')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="container mb-150">
            <a class="btn btn-outline-success mb-2" href="/tambah-menu">Tambah Menu</a>
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
                            <form action="/edit-menu/{{ $m->id_menu }}" method="post">@csrf<button
                                    type="submit">edit</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
        {{-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit
                    2023</span>
            </div>
        </footer> --}}
    </div>
    </div>
    {{-- end table --}}
@endsection
