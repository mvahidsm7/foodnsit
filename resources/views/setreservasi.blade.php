@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg" style="height: 90%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p></p>
                        <h2 class="text-light">Jumlah Pengunjung</h2>
                        <form action="/pesan" method="get" class="mt-5">
                            @csrf
                            <input class="input w-100" type="number" name="jumlah"
                                placeholder="Masukkan jumlah pengunjung" style="width: 100%"><br>
                            <input class="w-75" type="submit" value="CARI MEJA">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    {{-- <div class="contact-from-section mt-150 mb-150">
        <center>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mb-5 mb-lg-0">
                        <div id="form_status"></div>
                        <div class="contact-form">

                        </div>
                    </div>
                </div>
            </div>
        </center>
    </div> --}}
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
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31688.385624347888!2d107.55295179731444!3d-6.88482970801786!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6bd6aaaaaab%3A0xf843088e2b5bf838!2sSMK%20Negeri%2011%20Bandung!5e0!3m2!1sen!2sid!4v1684462748745!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- end google map section -->
@endsection
