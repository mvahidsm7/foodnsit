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
            {{-- <form action="/test/form" method="post">
                @csrf
                <select name="no_meja" id="">
                    @foreach (App\Models\Meja::all() as $item)
                        <option value="{{$item->no_meja}}">{{$item->no_meja}}</option>
                    @endforeach
                </select><br>
                @foreach (App\Models\Menu::all() as $item)
                    <Section>{{$item->nama}}</Section>
                    <input type="number" name="menu[]" id="" value="0" min="0">
                @endforeach <br>
                <button type="submit" class="btn btn-primary">
                    tes
                </button>
            </form> --}}
            @foreach ($test as $item)
                {{ $item->name }}
                {{ $item->pesanan_count }} <br>
            @endforeach
        </div>
    </div>
@endsection
