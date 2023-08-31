@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Halaman</p>
                        <h1>Meja</h1>
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
                <td>Nomor Meja</td>
                <td>Kapasitas</td>
                <td>Status</td>
            </tr>
            @foreach ($meja as $m)
                <tr>
                    <td>{{ $m->no_meja }}</td>
                    <td>{{ $m->kapasitas }}</td>
                    <td>{{ $m->status }}</td>
                </tr>
            @endforeach
        </table>
        <form action="/tambah-meja" method="post">
            @csrf
            <button class="btn btn-outline-success" type="submit">Tambah</button>
        </form>
    </div>
    {{-- end table --}}
@endsection
