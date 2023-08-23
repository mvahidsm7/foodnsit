<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Pesanan</title>
</head>

<body>
    <center>
        <br>
        <section class="sheet padding-10mm">
            <div class="top-header-area" id="sticker">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 text-center">
                            <div class="main-menu-wrap">
                                <!-- logo -->
                                <div class="site-logo"><img src="assets/img/logo.png" alt="">
                                </div>
                                <br>
                                <h1>LAPORAN PESANAN</h1>
                                <h3>Bulan: </h3>

                                <div class="container mt-150 mb-150">
                                    <table class="table" border="1" style="width: 100%" cellspacing="0">
                                        <tr class="table-active">
                                            <td>Nomer Pesanan</td>
                                            <td>ID pengguna</td>
                                            <td>No Meja</td>
                                            <td>Menu</td>
                                        </tr>
                                        @foreach ($pes as $m)
                                            <tr>
                                                <td>{{ $m->no_pes }}</td>
                                                <td>{{ $m->user[0]->name }}</td>
                                                <td>{{ $m->no_meja }}</td>
                                                <td>{{ $m->menu[0]->nama }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
        </section>
</body>

</html>
