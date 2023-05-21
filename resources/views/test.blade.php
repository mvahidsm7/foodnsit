@extends('layouts.main')
@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Test</p>
                        <h1>Test</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <div class="mt-150 mb-150">
        <div class="container">
            <table class="table">
                <thead>
                    <tr class="bg-secondary">
                        <td>nama</td>
                        <td>harga</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($harga as $h)
                        <tr>
                            <td>{{$h->nama}}</td>
                            <td>{{$h->harga}}</td>
                        </tr>
                    @endforeach
                    {{-- @foreach (App\Models\Menu::all() as $item)
                        <tr>
                            <td>
                                {{ $item->nama }}
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>
            {{-- @foreach ($menu as $item)
            <p>
                @dump($item)
                {{$item->nama}}<br>
                {{$item->deskripsi}}<br>
                {{$item->gambar}}<br>
                {{$item->kategori}}<br>
                {{$item->harga}}<br>
            </p>
            @endforeach --}}
            {{-- @foreach (app\Models\Menu::join('kategori', 'menu.kategori', '=', 'kategori.id_kategori')
            ->select('menu.*', 'kategori.harga')
            ->get(); as $item)
                {{$item}}
            @endforeach --}}
        </div>
    </div>
@endsection
