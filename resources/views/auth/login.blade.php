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
    {{-- <div class="bg"></div>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="forem container mt-5">
            <div class="d-flex">
                <div class="kartu ms-5 field shadow-lg w-50">
                    <div class="card-body">
                        <center>
                            <img class="w-50 mb-2" src="{{ asset('desainjadi/assets/foto/logo.png') }}">
                        </center>
                        <h2 class="card-title mb-3 text-center">Login</h2>
                        @if ($errors->has('email'))
                            <div class="text-center mb-2">
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            </div>
                        @endif
                        <div class="container mb-1">
                            <div class="row d-flex mb-3">
                                <input id="email" type="email" class="" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
                            </div>
                            <div class="row d-flex mb-3" id="formPw">
                                <input id="password" type="password" class="form-control col-11" name="password"
                                    required autocomplete="current-password" placeholder="Password">
                                <svg class="lihat" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512" onclick="lihatPassword()"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn">Masuk</button>
                        </div>
                        <div class="text-center">
                            Belum Punya Akun? <a class="text-decoration-none" href="{{ route('register') }}">Buat
                                Akun</a>
                        </div>
                    </div>
                </div>
                <div class="gambar w-25 h-25 shadow-lg">
                    <img src="{{ asset('desainjadi/assets/foto/gmbr.jpg') }}" alt="">
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
                            @if ($errors->has('email'))
                                <div class="text-center">
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                </div>
                            @endif
                        </center>
                        <div class="container mb-1">
                            <div class="row d-flex mb-3">
                                <input id="email" type="email" class="input" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="Email">
                            </div>
                            <div class="row mb-3">
                                <input id="password" type="password" class="input" name="password" required
                                    autocomplete="current-password" placeholder="Password">
                                <svg class="lihat" xmlns="http://www.w3.org/2000/svg" height="1em"
                                    viewBox="0 0 576 512"
                                    onclick="lihatPassword()"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z" />
                                </svg>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="tombol w-100">Masuk</button>
                        </div>
                        <div class="text-center">
                            Lupa Password? <a class="text-decoration-none" href="/forgot-password">Reset Password</a>
                            <br>
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

<script>
    function lihatPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>

</html>
