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
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="container">
            <div class="body d-md-flex align-items-center justify-content-between w-75">
                <div class="box-1 mt-md-0">
                    <img src="{{ asset('desainjadi/assets/foto/gmbr.jpg') }}" class="" alt="">
                </div>
                <div class=" box-2 d-flex flex-column h-100">
                    <div class="mt-1">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <center>
                                <img class="w-50" src="{{ asset('desainjadi/assets/foto/logo.png') }}">
                                <h2 class="card-title text-center">Daftar</h2>
                            </center>
                            @if ($errors->has('email'))
                                <div class="text-center">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            @endif
                            <div class="container mb-3">
                                <div class="row d-flex mb-3">
                                    <input id="name" type="text" class="input" name="name"
                                        value="{{ old('name') }}" placeholder="Nama" required autocomplete="name"
                                        autofocus>
                                </div>
                                <div class="row d-flex mb-3">
                                    <input id="email" type="email" class="input" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Email">
                                </div>
                                <div class="row d-flex mb-3">
                                    <input id="password" type="password" class="input" name="password" required
                                        autocomplete="current-password" placeholder="Password">
                                </div>
                                <div class="row d-flex mb-3">
                                    <input id="password-confirm" type="password" class="input"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Konfirmasi Kata Sandi">
                                </div>

                            </div>
                            <div class="mb-3">
                                <button type="submit" class="tombol w-100">Daftar</button>
                            </div>
                            <div class="text-center">
                                Sudah Punya Akun? <a class="text-decoration-none" href="{{ route('login') }}">Masuk</a>
                            </div>
                            </center>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>
