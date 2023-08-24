@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg"  style="height: 90%">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>silahkan konfirmasi</h1>
                        @if ($pes->no_meja == true)
                            <b class="text-light"><i>Dana yang akan dikembalikan akan di kirimkan ke rekening anda dengan potongan 10%</i></b>
                            <p>Apakah anda yakin?</p>
                            <center>
                                <form action="/batal/{{ $pes->kd_pes }}/sukses" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary text-light">Konfirmasi</button>
                                    <a href="/profil" class="btn btn-outline-success text-light">Batal</a>
                                </form>
                            </center>
                        @else
                            <b class="text-light"><i>Dana yang akan dikembalikan akan di kirimkan ke rekening anda dengan potongan 5%</i></b>
                            <p>Apakah anda yakin?</p>
                            <center>
                                <form action="/batal/{{ $pes->kd_pes }}/sukses" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-secondary text-light">Konfirmasi</button>
                                    <a href="/profil" class="btn btn-outline-success text-light">Batal</a>
                                </form>
                            </center>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
@endsection
