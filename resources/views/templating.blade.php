<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>

<body>
    <div class="container mt-5">
        <div class="d-flex">
            <div class="kartu ms-5 field shadow-lg w-50">
                <div class="card-body">
                    <center>
                        <img class="w-50 mb-2" src="{{ asset('desainjadi/assets/foto/logo.png') }}">
                    </center>
                    <h2 class="card-title mb-5 text-center">Login</h2>
                    <div class="container mb-1">
                        <div class="row d-flex mb-3">
                            <input class="" type="email" name="" id="" placeholder="Email">
                        </div>
                        <div class="row d-flex mb-3">
                            <input class="" type="password" name="" id="" placeholder="Password">
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
</body>

</html>
