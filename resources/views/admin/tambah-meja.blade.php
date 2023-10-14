@extends('layouts.admin1')
@section('content')
    <!-- breadcrumb-section -->
    {{-- <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Tambah Meja</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end breadcrumb section -->
    {{-- form --}}
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="container mt-150 mb-150">
            <form action="/tambah-meja/sukses" method="post">
                @csrf
                <div class="mb-3">
                    <span>Nomor Meja</span>
                    <input class="form-control" type="text" name="no_meja" id="">
                </div>
                <div class="mb-5">
                    <span>Kapasitas Meja</span>
                    <input class="form-control" type="text" name="kapasitas" id="">
                </div>
                <center>
                    <button class="btn btn-warning w-75" type="submit">simpan</button>
                </center>
            </form>
        </div>
        </div>
    </div>
@endsection
