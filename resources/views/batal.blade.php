@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>halaman</p>
                        <h1>Kosongan</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- content -->
    <div class="container mt-150 mb-150">
        <form action="/cancel/{{$pes->no_res}}" method="post">
            <button type="submit" class="btn btn-danger">Konfirmasi</button>
        </form>
        <a href="/profil" class="btn btn-success">Batal</a>
    </div>
    <!-- end content -->
@endsection
