@extends('layouts.app')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="css/login.css">

        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    </head>

    <body background="{{ asset('assets/img/background.jpg') }}" class="ukuran">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <section class="container forms">
                <div class="form login">
                    <div class="form-content">
                        <img src="{{ asset('assets/img/logo.png') }}" width="40%" height="30%" class="center">
                        <br>
                        <header>Masuk</header>
                        @csrf
                        <div class="field input-field">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>

                        <div class="field input-field">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Kata Sandi">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div><br>
                        <div class="form-link">
                            <span>Tidak Punya Akun? <a href="#" class="link signup-link">Daftar</a></span>
                        </div>
                        <div class="field button-field">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>
                        </div>

        </form>

        </div>
        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <img src="{{ asset('assets/img/logo.png') }}" width="40%" height="30%" class="center">
                <br>
                <header>Daftar</header>
                <div class="field input-field">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" placeholder="Nama" required autocomplete="name"
                        autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="field input-field">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="field input-field">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Kata Sandi"
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    <div class="field input-field">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" placeholder="Konfirmasi Kata Sandi">
                    </div>

                    <div class="form-link">
                        <span>Sudah Punya Akun? <a href="#" class="link login-link">Masuk</a></span>
                    </div>

                    <div class="field button-field">
                        <button>Daftar</button>
                    </div>
                    </form>

                </div>
            </div>
            </section>
            <!-- JavaScript -->
            <script src="assets/js/login.js"></script>
    </body>

    </html>
@endsection
