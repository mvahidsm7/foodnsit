@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Menu</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- products -->
    <div class="container">
{{-- 
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">Semua</li>
                        <li data-filter=".3">Makanan</li>
                        <li data-filter=".2">Dessert</li>
                        <li data-filter=".1">Minuman</li>
                    </ul>
                </div>
            </div>
        </div> --}}

        <div class="row">
            @foreach ($menu as $m)
                {{-- <div class="col-sm-4 text-center {{$m->kategori}}">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{$m->gambar}}" alt=""></a>
						</div>
						<h3>{{$m->nama}}</h3>
						<p class="product-price"><span>Per porsi</span>
							RP.
							{{$m->harga}}
						</p>
						<p>{{$m->deskripsi}}</p>
					</div>
				</div> --}}
                <div class="col-sm-3 mb-4">
                    <div class="menu card h-100 text-center">
                        <img class="card-img-top" src="{{ $m->gambar }}" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">{{ $m->nama }}</h4>
                            <h6>Rp. {{ $m->harga }}</h6>
                            <p class="card-text">{{ $m->deskripsi }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- end products -->
@endsection
