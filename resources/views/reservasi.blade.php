@extends('layouts.main')
@section('content')
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>halaman</p>
							<h1>Reservasi</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end breadcrumb section -->
	
		<!-- contact form -->
		<div class="contact-from-section mt-150 mb-150">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 mb-5 mb-lg-0">
						 <div id="form_status"></div>
						<div class="contact-form">
							<form action="/pesan/sukses" method="post">
								@csrf
								<h6><section>Meja :</section>
								<select class="form-control form-control-lg" name="no_meja" id="" class="form-control input-group form-label">
									<option value="" hidden selected>Pilih Meja</option>
									@foreach ($meja as $m)
									<option value="{{$m->no_meja}}" @if ($m->status == 'dipesan') hidden @endif>0{{$m->no_meja}} -- Kapasitas {{$m->kapasitas}}</option>
									@endforeach
								</select><br>
								<section>Tanggal :</section>
								<input class="form-control form-control-lg" type="date" class="form-control input-group form-label" name="tanggal"><br>
								<section>Menu :</section>
								<select class="form-control form-control-lg" name="menu" class="form-control input-group form-label" id="">
									<option value="" hidden selected>Pilih Menu</option>
									@foreach ($menu as $m)
										<option value="{{$m->id_menu}}">{{$m->nama}}</option>
									@endforeach	
								</select><br>
								<section>Jam :</section>
								<input class="form-control form-control-lg" type="time" class="form-control input-group form-label" name="jam"><br>
								{{-- <button type="submit" class="btn btn-outline-success">Pesan</button> --}}
								<br>
								<center><input type="submit" value="PESAN" style="width: 700px"></center>
								</h6>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i> Alamat Kami</h4>
							<p>JL. Budi Jl. Raya Cilember RT 01/RW 04 <br> Sukaraja, Cicendo, Kota Bandung <br> Jawa Barat</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Jam operasional</h4>
							<p>SENIN - JUMAT: 12 to 8 PM <br> SABTU - MINGGU: Segimana mood </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contact</h4>
							<p>Phone: (022) 6652442 <br> Email: smkn11bdg@gmail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end contact form -->
	
		<!-- find our location -->
		<div class="find-location blue-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<p> <i class="fas fa-map-marker-alt"></i> Temui kami disini</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end find our location -->
	
		<!-- google map section -->
		<div class="embed-responsive embed-responsive-21by9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31688.385624347888!2d107.55295179731444!3d-6.88482970801786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bd6aaaaaab%3A0xf843088e2b5bf838!2sSMK%20Negeri%2011%20Bandung!5e0!3m2!1sen!2sid!4v1684462748745!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- end google map section -->
	
@endsection