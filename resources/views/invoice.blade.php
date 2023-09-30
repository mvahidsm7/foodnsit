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
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
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
                                    <div class="invoice-id">
                                        <div class="info">
                                            <h1 class="inv-header-1">Invoice</h1>
                                            <p class="mb-1">Invoice Nomor: <span>{{ $pes->kd_pes }}</span></p>
                                            {{-- <p class="mb-0">Invoice Tanggal: <span>24 Jan 2022</span></p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Kepada:</h4> <br/>
                                        <h2 class="name">{{ Auth::user()->name }}</h2>
                                        <p class="invo-addr-1">
                                            Email               : {{ Auth::user()->email }} <br/>
                                            Nomor Meja          : {{ $pes->no_meja }} <br/>
                                            Tanggal Reservasi   : {{ $pes->tanggal }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Menu</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Jumlah</th>
                                        <th class="text-end">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($menu as $men)
                                    <tr class="tr">
                                        <td>
                                            <div class="item-desc-1">
                                                <span>{{ $noUrut++ }}</span>
                                            </div>
                                        </td>
                                        <td class="pl0">{{ $men->menu->nama }}</td>
                                        <td class="text-center">Rp.{{ $men->harga }}</td>
                                        <td class="text-center">{{ $men->qty }}</td>
                                        <td class="text-end">Rp.{{ $men->menu->harga * $men->qty }}</td>
                                    </tr>
                                        @endforeach
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Total</td>
                                        <td class="f-w-600 text-end active-color">Rp.{{ $bayar->total }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-7">
                                    <div class="terms-conditions mb-30">
                                        <h3 class="inv-title-1">Syarat & Ketentuan</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-sm-12">
                                    <div class="contact-info clearfix">
                                        <a href="#" class="d-flex"><i class="fa fa-phone"></i> +62 123 647 840</a>
                                        <a href="#" class="d-flex"><i class="fa fa-envelope"></i> info@foodnsit.com</a>
                                        <a href="#" class="mr-0 d-flex d-none-580"><i class="fa fa-map-marker"></i> Jalan Budhi, Bandung</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jspdf.min.js"></script>
<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>