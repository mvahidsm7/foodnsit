@extends('layouts.main')
@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
        <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{ config('midtrans.client_key') }}"></script>
        <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->
    </head>

    <body>
        <!-- breadcrumb-section -->
        <div class="breadcrumb-section breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="breadcrumb-text">
                            <p>Detail</p>
                            <h1>Pesanan</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breadcrumb section -->

        {{-- Pesanan --}}
        <div class="cart-section mt-5 mb-5">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <center>
                            <h4 class="card-title">Pesanan Anda</h4>
                        </center>
                        <hr>
                        <p>
                        <h5>Kode Pesanan :</h5>
                        {{ $pesanan[0]->kd_pes }} <br>
                        <p>
                        <h5>Nomer Meja :</h5>{{ $pesanan[0]->no_meja }}
                        @if ($pesanan[0]->no_meja == false)
                            Tidak ada
                        @endif
                        </p>
                        <h5>Menu :</h5>
                        @foreach ($detail as $menu)
                            {{ $menu->menu->nama }} ({{ $menu->qty }}) : <b>{{ $menu->menu->harga * $menu->qty }}</b><br>
                        @endforeach
                        </p>
                        <h5>Jam :</h5>{{ $pesanan[0]->jam }}
                        </p>
                        <h5>Tanggal :</h5>{{ $pesanan[0]->tanggal }}
                        </p>
                        <h3>Total :
                            {{$total}}
                        </h3>
                        </p>
                        <hr>
                        <i>Bayar melalui bank dengan memasukkan kode tersebut di pembayaran lainnya</i>
                        <hr>
                        </p>
                        <p>
                            <center>
                                <button type="submit" class="btn btn-outline-success" id="pay-button"
                                    style="width: 750px">Bayar</button>
                            </center>
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Pesanan --}}
        <script type="text/javascript">
            // For example trigger on button clicked, or any time you need
            var payButton = document.getElementById('pay-button');
            payButton.addEventListener('click', function() {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result) {
                        /* You may add your own implementation here */
                        alert("Pembayaran Berhasil!");
                        location.replace("/bayar/{{$pesanan[0]->kd_pes}}/sukses");
                    },
                    onPending: function(result) {
                        /* You may add your own implementation here */
                        alert("Menunggu Pembayaran");
                        console.log(result);
                    },
                    onError: function(result) {
                        /* You may add your own implementation here */
                        alert("Pembayaran Gagal!");
                        console.log(result);
                    },
                    onClose: function() {
                        /* You may add your own implementation here */
                        alert('Pembayaran Belum Selesai');
                    }
                })
            });
        </script>
    </body>

    </html>
@endsection
