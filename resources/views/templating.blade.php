<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ Route::currentRouteName() }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
</head>

<body>
    <div class="bg"></div>
    {{-- 
    <form action="{{ route('login') }}" method="post">
        @csrf
        @error('email')
            <center>
                <span class="invalid-feedback" role="alert">
                    <strong>Email atau Kata Sandi Salah</strong>
                </span>
            </center>
        @enderror
        <div class="forem container mt-5">
            <div class="d-flex">
                <div class="kartu ms-5 field shadow-lg w-50">
                    <div class="card-body">
                        <center>
                            <img class="w-50 mb-2" src="{{ asset('desainjadi/assets/foto/logo.png') }}">
                        </center>
                        <h2 class="card-title mb-5 text-center">Login</h2>
                        <div class="container mb-1">
                            <div class="row d-flex mb-3">
                                <input id="email" type="email" class="" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            </div>
                            <div class="row d-flex mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn">Masuk</button>
                        </div>
                        <div class="text-center">
                            Belum Punya Akun? <a class="text-decoration-none" href="">Buat Akun</a>
                        </div>
                    </div>
                </div>
                <div class="gambar w-25 h-25 shadow-lg">
                    <img src="{{ asset('desainjadi/assets/foto/back.png') }}" alt="">
                </div>
            </div>
        </div>
    </form> --}}
    <div class="container">
        <div class="body d-md-flex align-items-center justify-content-between w-75">
            <div class="box-1 mt-md-0">
                <img src="{{ asset('desainjadi/assets/foto/gmbr.jpg') }}" class="" alt="">
            </div>
            <div class=" box-2 d-flex flex-column h-100">
                <div class="mt-2">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <center>
                            <img class="w-50" src="{{ asset('desainjadi/assets/foto/logo.png') }}">
                            <h2 class="card-title text-center">Login</h2>
                        </center>
                        @if ($errors->has('email'))
                            <div class="text-center">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        @endif
                        <div class="container mb-1">
                            <div class="row d-flex mb-3">
                                <input id="email" type="email" class="input" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
                            </div>
                            <div class="row d-flex mb-3">
                                <input id="password" type="password" class="input" name="password" required
                                    autocomplete="current-password" placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="tombol w-100">Masuk</button>
                        </div>
                        <div class="text-center">
                            Belum Punya Akun? <a class="text-decoration-none" href="{{ route('register') }}">Buat
                                Akun</a>
                        </div>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
