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
            @foreach ($det as $item)
                <hr>
                {{$item['id_menu']}}
                <br>
                {{$item['qty']}}
                <hr>
            @endforeach
            <form action="/test/form" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">
                    tes
                </button>
            </form>
        </div>
    </div>
@endsection
