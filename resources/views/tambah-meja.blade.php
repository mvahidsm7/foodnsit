@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Halaman</p>
                        <h1>Tambah Meja</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    {{-- form --}}
    <div class="container mt-150 mb-150">
        <center>
        <form action="/tambah-meja/sukses" method="post">
            @csrf
            <input type="text" name="kapasitas" id="" placeholder="kapasitas">
            <button class="btn btn-warning" type="submit">simpan</button>
        </form>
    </div>
@endsection
