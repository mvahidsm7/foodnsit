@extends('layouts.admin1')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
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
    </div>
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit 2023</span>
        </div>
    </footer>
    </div>
    {{-- end table --}}
@endsection
