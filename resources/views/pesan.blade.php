@extends('layouts.main')
@section('content')
		<!-- breadcrumb-section -->
		<div class="breadcrumb-section breadcrumb-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 offset-lg-2 text-center">
						<div class="breadcrumb-text">
							<p>halaman ini untuk</p>
							<h1>Pesan & Reservasi</h1>
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
								<section>Meja :</section>
								<select name="no_meja" id="" class="form-control input-group form-label">
									<option value="" hidden selected>Pilih Meja</option>
									{{-- @foreach ($meja as $m)
										<option value="{{$m->id_meja}}" @if ($m->status == 'dipesan') hidden @endif>0{{$m->id_meja}}</option>
									@endforeach --}}
								</select><br>
								<section>Tanggal :</section>
								<input type="date" class="form-control input-group form-label" name="tanggal"><br>
								<section>Jam :</section>
								<input type="time" class="form-control input-group form-label" name="jam"><br>
								<button type="submit" class="btn btn-outline-success">Pesan</button>
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
						<p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
					</div>
				</div>
			</div>
		</div>
		<!-- end find our location -->
	
		<!-- google map section -->
		<div class="embed-responsive embed-responsive-21by9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7451784205296!2d107.55881887470319!3d-6.921036293078629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e547cd6d6ce7%3A0x2ea4453b44e4daaa!2sGg.%20Duren%20No.156%2C%20Melong%2C%20Kec.%20Cimahi%20Sel.%2C%20Kota%20Cimahi%2C%20Jawa%20Barat%2040534!5e0!3m2!1sid!2sid!4v1683622434371!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		<!-- end google map section -->
	
@endsection