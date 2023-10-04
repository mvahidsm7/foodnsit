<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Invoice | Food n Sit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('') }}assets/img/favicon.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<!-- Invoice 6 start -->
<div class="invoice-6 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo">
                                            <img src="{{ asset('assets/img/logo.png') }}" alt="logo">
                                        </div>
                                        <!-- logo ended -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-contact-us">
                                        <h1>Hubungi Kami</h1>
                                        <ul class="link">
                                            <li>
                                                <i class="fa fa-map-marker"></i> Jalan Budhi, Bandung
                                            </li>
                                            <li>
                                                <i class="fa fa-envelope"></i> <a href="mailto:sales@hotelempire.com">info@foodnsit.com</a>
                                            </li>
                                            <li>
                                                <i class="fa fa-phone"></i> <a href="tel:+55-417-634-7071">+62 123 647 840</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contant">
                            <div class="invoice-top">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h1 class="invoice-name">Invoice</h1>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <div class="invoice-number-inner">
                                            <h2 class="name"></h2>
                                            <p class="mb-0">Tanggal Invoice: <span>{{ $pes->tanggal }}</span></p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-30">
                                        <div class="invoice-number">
                                            <h4 class="inv-title-1">Invoice To</h4>
                                            <h2 class="name mb-10">{{ Auth::user()->name }}</h2>
                                            <p class="invo-addr-1 mb-0">
                                            {{ Auth::user()->email }} <br/>
                                            Nomor Meja          : {{ $pes->no_meja }} <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-center">
                                <div class="order-summary">
                                    <div class="table-outer">
                                        <table class="default-table invoice-table">
                                            <thead>
                                            <tr>
                                                <th>Menu</th>
                                                <th>Harga</th>
                                                <th>Jumlah</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            @foreach ($menu as $men)
                                            <tbody>
                                            <tr>
                                                <td>{{ $men->menu->nama }}</td>
                                                <td>Rp.{{ $men->harga }}</td>
                                                <td>{{ $men->qty }}</td>
                                                <td>Rp.{{ $men->menu->harga * $men->qty }}</td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><strong>Total</strong></td>
                                                <td><strong>Rp.{{ $bayar->total }}</strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-bottom">
                                <div class="row">
                                    <div class="col-lg-7 col-md-7 col-sm-7">
                                        <br class="terms-conditions mb-30">
                                            <h3 class="inv-title-1 mb-10">Syarat dan Ketentuan</h3>
                                            Invoice ini sah dan diproses oleh komputer<br>
                                            <font size="1"><i>Silakan hubungi foodnsit@gmail.com apabila kamu membutuhkan bantuan.</i></font>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 6 end -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
