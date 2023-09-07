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

                                <div class="container mt-150 mb-150">
                                    <table class="table" border="1" style="width: 100%" cellspacing="0">
                                        <tr class="table-active">
                                            <td>Nomor Pesanan</td>
                                            <td>Nama</td>
                                            <td>Nomor Meja</td>
                                            <td>Menu</td>
                                            <td>Total</td>
                                        </tr>
                                        @foreach (App\Models\Pesan::with('pengguna', 'bayar', 'detail')->where('status', '=', 2)->orWhere('status', '=', 3)->get() as $p)
                                            <tr>
                                                <td>{{ $p->kd_pes }}</td>
                                                <td>{{ $p->pengguna[0]->name }}</td>
                                                <td>{{ $p->no_meja }}</td>
                                                <td>
                                                    @foreach ($p->detail as $item)
                                                        {{ App\Models\Menu::select('nama')->where('id_menu', $item->id_menu)->get()[0]->nama }}
                                                        ({{ $item->qty }})
                                                        ,
                                                    @endforeach
                                                </td>
                                                <td>{{ $p->bayar->total }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

</html>
