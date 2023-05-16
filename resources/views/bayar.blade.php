@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>halaman</p>
                        <h1>Bayar</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    {{-- Pesanan --}}
    <div class="cart-section mt-5 mb-5">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <center>
                        <h4 class="card-title">Pesanan Anda</h4>
                    </center>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}
@endsection
