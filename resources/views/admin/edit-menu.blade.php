@extends('layouts.admin1')
@section('content')
    {{-- form --}}
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container mt-150 mb-150">
                <form action="/update-menu/sukses" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <span>id menu</span>
                        <input class="form-control text-light bg-dark" type="text" name="id_menu" id=""
                            value="{{ $menu->id_menu }}" readonly>
                    </div>
                    <div class="mb-3">
                        <span>nama</span>
                        <input class="form-control text-light bg-dark" type="text" name="nama" id=""
                            value="{{ $menu->nama }}">
                    </div>
                    <div class="mb-3">
                        <span>gambar</span><br>
                        <input class="" type="file" name="gambar" accept="image/*" id="">
                    </div>
                    <div class="mb-3">
                        <span>deskripsi menu</span>
                        <input class="form-control text-light bg-dark" type="text" name="deskripsi" id=""
                            value="{{ $menu->deskripsi }}">
                    </div>
                    <div class="mb-3">
                        <span>harga</span>
                        <input class="form-control text-light bg-dark" type="number" name="harga" id=""
                            value="{{ $menu->harga }}">
                    </div>
                    <div class="mb-5">
                        <span>kategori</span>
                        <select class="form-control text-light bg-dark" type="number" name="kategori" id="">
                            @foreach ($kategori as $item)
                                <option @if ($menu->kategori == $item->id) selected @endif value="{{ $item->id }}">{{ $item->kategori }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <center>
                            <button class="btn btn-warning w-75" type="submit">simpan</button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <div class="container mt-150 mb-150">
        <center>
            <form action="/tambah-menu/sukses" method="post">
                @csrf
                <input type="text" name="nama" id="" placeholder="nama">
                <input type="text" name="gambar" id="" placeholder="gambar">
                <input type="text" name="deskripsi" id="" placeholder="deskripsi menu">
                <input type="number" name="harga" id="" placeholder="harga">
                <button class="btn btn-warning" type="submit">simpan</button>
            </form>
    </div> --}}
@endsection
