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
                        <center>
                            <form action="/batal/{{ $pes->no_pes }}/sukses" method="post">
                                @csrf
                                <button type="submit" class="btn btn-outline-secondary text-light">Konfirmasi</button>
                                <a href="/profil" class="btn btn-outline-success text-light">Batal</a>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

@endsection
