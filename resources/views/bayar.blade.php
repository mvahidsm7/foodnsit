@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
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
                    <h5>Kode Pembayaran :</h5>
                    PPFNS001002003 <br>
                    <p>
                    <h5>Nomer Meja :</h5>{{ $pes->no_meja }}
                    @if ($pes->no_meja == false)
                        Tidak ada
                    @endif
                    </p>
                    <h5>Menu :</h5>
                    @if ($pes->id_menu == false)
                        Tidak ada
                    @else
                        {{ $menu->nama }}
                    @endif
                    </p>
                    <h5>Jam :</h5>{{ $pes->jam }}
                    </p>
                    <h5>Tanggal :</h5>{{ $pes->tanggal }}
                    </p>
                    <h3>Total :
                        @if ($pes->no_meja == false)
                            {{ $men }}
                        @endif
                        @if ($pes->id_menu == false)
                            {{ $mej }}
                        @endif
                        @if ($pes->id_menu == true && $pes->no_meja == true)
                            {{ $tot }}
                        @endif
                    </h3>
                    </p>
                    <hr>
                    <i>Bayar melalui bank dengan memasukkan kode tersebut di pembayaran lainnya</i>
                    <hr>
                    </p>
                    <p>
                        @if ($pes->status == 0)
                            {{-- <form action="/bayar/{{ $pes->no_pes }}/sukses" method="post">
                                @csrf --}}
                                <center>
                                    <button type="submit" class="btn btn-outline-success" id="pay-button"
                                        style="width: 750px">Bayar</button>
                                </center>
                            {{-- </form> --}}
                        @else
                        <center>
                            <a href="/batal/{{ $pes->no_pes }}" class="btn btn-outline-danger" style="width: 750px">Batalkan Pesanan</a>
                        </center>
                        @endif


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
                payButton.addEventListener('click', function () {
                // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{ $snapToken }}', {
                    onSuccess: function(result){
                    /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                    },
                    onPending: function(result){
                    /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                    },
                    onError: function(result){
                    /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                    },
                    onClose: function(){
                    /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                    }
                })
                });
        </script>
    </body>
</html>
@endsection
