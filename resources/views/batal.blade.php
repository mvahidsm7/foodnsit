@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>silahkan konfirmasi</h1>
                        <p>Apakah anda yakin?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- content -->
    <div class="container mt-150 mb-150">
        <center>
            <form action="/batal/{{ $pes->no_pes }}/sukses" method="post">
                @csrf
                <button type="submit" class="btn btn-danger">Konfirmasi</button>
            </form>
            <a href="/profil" class="btn btn-success">Batal</a>
        </center>
    </div>
    <!-- end content -->
@endsection
