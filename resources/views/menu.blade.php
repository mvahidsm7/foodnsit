@extends('layouts.main')
@section('content')
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Halaman</p>
						<h1>Menu</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".makanan">Main Course</li>
                            <li data-filter=".dessert">Dessert</li>
                            <li data-filter=".minuman">Drink</li>
                        </ul>
                	</div>
        		</div>
    		</div>

			<div class="row product-lists">
				@foreach ($menu as $m)
				<div class="col-lg-4 col-md-6 text-center {{$m->kategori}}">
					<div class="single-product-item">
						<div class="product-image">
							<a href="single-product.html"><img src="{{$m->gambar}}" alt=""></a>
						</div>
						<h3>{{$m->nama}}</h3>
						<p class="product-price"><span>Per porsi</span>RP.{{$m->harga}}</p>
						<p>{{$m->deskripsi}}</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- end products -->

@endsection