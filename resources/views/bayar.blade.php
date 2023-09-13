@extends('layouts.main')
@section('content')
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
                    {{ $pesanan[0]->kd_pes }}
                    </p>
                    <p>
                    <h5>Nomer Meja :</h5>{{ $pesanan[0]->no_meja }}
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
                        Rp. {{ $total }}
                    </h3>
                    <i id="hitung"></i>
                    </p>
                    <hr>
                    <center><i>Harap bayar pesanan anda sebelum {{ $pesanan[0]->expired_at }}</i></center>

                    <hr>
                    </p>
                    <p>
                        <center>
                            @if ($pesanan[0]->expired_at > now())
                                <button type="submit" class="btn btn-outline-success" id="pay-button"
                                    style="width: 750px">Bayar</button>
                            @else
                                <a href="/profil" class="btn btn-outline-secondary" style="width: 750px">Kembali</a>
                            @endif
                        </center>
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    {{-- end Pesanan --}}

    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ config('midtrans.client_key') }}"></script>
    <!-- Note: replace with src="https://app.midtrans.com/snap/snap.js" for Production environment -->

    <script>
        // Ambil tanggal dan waktu kadaluwarsa dari server atau dari data pesanan
        var expirationDate = new Date(
            '{{ $pesanan[0]->expired_at }}'
        ); // Ganti dengan tanggal dan waktu kadaluwarsa sesuai dengan format dari server

        function updateCountdown() {
            var now = new Date();
            var timeDifference = expirationDate - now;

            var seconds = Math.floor((timeDifference / 1000) % 60);
            var minutes = Math.floor((timeDifference / 1000 / 60) % 60);
            var hours = Math.floor((timeDifference / (1000 * 60 * 60)) % 24);
            var days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));

            var countdownElement = document.getElementById('hitung');

            if (timeDifference <= 0) {
                countdownElement.innerHTML = "Waktu habis";
                return;
            }

            var countdownText = "Waktu tersisa: ";
            countdownText += (days > 0 ? days + " hari, " : "");
            countdownText += (hours > 0 ? hours + " jam, " : "");
            countdownText += (minutes > 0 ? minutes + " menit, " : "");
            countdownText += seconds + " detik";

            countdownElement.innerHTML = countdownText;
        }

        setInterval(updateCountdown, 1000);
    </script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function() {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $snapToken }}', {
                onSuccess: function(result) {
                    /* You may add your own implementation here */
                    alert("Pembayaran Berhasil!");
                    location.replace("/bayar/{{ $pesanan[0]->kd_pes }}/sukses");
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
@endsection
