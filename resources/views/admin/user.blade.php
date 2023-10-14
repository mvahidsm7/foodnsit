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
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->pesanan_count }}</td>
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
