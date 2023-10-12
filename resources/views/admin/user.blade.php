@extends('layouts.admin1')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="container mt-150 mb-150">
        <table class="table">
            <tr class="table-active">
                <td>Nama User</td>
                <td>Email User</td>
                <td>Jumlah Pesanan</td>
            </tr>
            @foreach ($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>{{ $u->pesan_count }}</td>
                </tr>
            @endforeach
        </table>
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