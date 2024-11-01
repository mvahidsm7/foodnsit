@extends('layouts.admin1')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Status Pesanan</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> Nama Pemesan </th>
                                            <th> Kode Pesanan </th>
                                            <th> Tanggal Pemesanan </th>
                                            <th> Nomor Meja </th>
                                            <th> Menu </th>
                                            <th> Tanggal & Jam </th>
                                            <th> Status </th>
                                            <th> Aksi </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($pes)
                                            {{ $pes->links('pagination::bootstrap-5') }}
                                            @foreach ($pes as $p)
                                                <tr>
                                                    <td>
                                                        <span class="pl-2">{{ $p->pengguna[0]->name }}</span>
                                                    </td>
                                                    <td> {{ $p->kd_pes }} </td>
                                                    <td> {{ $p->created_at->format('Y-m-d') }} </td>
                                                    <td> {{ $p->no_meja }} </td>
                                                    <td>
                                                        @foreach ($p->detail as $item)
                                                            {{ App\Models\Menu::select('nama')->where('id_menu', $item->id_menu)->get()[0]->nama }}
                                                            ({{ $item->qty }})
                                                            <br>
                                                        @endforeach
                                                    </td>
                                                    <td> {{ $p->jam }} {{ $p->tanggal }} </td>
                                                    <td>
                                                        @if ($p->status == 1)
                                                            @if ($p->expired_at < now())
                                                                <div class="badge badge-outline-secondary">Kadaluarsa</div>
                                                            @else
                                                                <div class="badge badge-outline-warning">Menunggu</div>
                                                            @endif
                                                        @elseif ($p->status == 2)
                                                            <div class="badge badge-outline-success">Dibayar</div>
                                                        @elseif ($p->status == 3)
                                                            <div class="badge badge-outline-primary">Selesai</div>
                                                        @else
                                                            <div class="badge badge-outline-danger">Batal</div>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($p->status == 1)
                                                            <button onclick="konfirmasi('{{$p->kd_pes}}')"
                                                                class="btn btn-outline-danger">Batalkan</button>
                                                        @elseif ($p->status == 2)
                                                            <a href="" class="btn btn-outline-success">Selesaikan</a>
                                                            <br>
                                                            <br>
                                                            <button onclick="konfirmasi('{{$p->kd_pes}}')"
                                                                class="btn btn-outline-danger">Batalkan</button>
                                                        @else
                                                            Selesai
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Volume Pendapatan</h4>
                            <div id="pendapatan"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pemesanan</h4>
                            <div id="pemesanan"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-row justify-content-between">
                                <h4 class="card-title">Messages</h4>
                                <p class="text-muted mb-1 small">View all</p>
                            </div>
                            <div class="preview-list">
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/img/faces/face6.jpg') }}" alt="image"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Leonard</h6>
                                                <p class="text-muted text-small">5 minutes ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/img/faces/face5.jpg') }}" alt="image"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Luella Mills</h6>
                                                <p class="text-muted text-small">10 Minutes Ago</p>
                                            </div>
                                            <p class="text-muted">Well, it seems to be working now.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/img/faces/face11.jpg') }}" alt="image"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Ethel Kelly</h6>
                                                <p class="text-muted text-small">2 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Please review the tickets</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview-item border-bottom">
                                    <div class="preview-thumbnail">
                                        <img src="{{ asset('assets/img/faces/face8.jpg') }}" alt="image"
                                            class="rounded-circle" />
                                    </div>
                                    <div class="preview-item-content d-flex flex-grow">
                                        <div class="flex-grow">
                                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                                                <h6 class="preview-subject">Herman May</h6>
                                                <p class="text-muted text-small">4 Hours Ago</p>
                                            </div>
                                            <p class="text-muted">Thanks a lot. It was easy to fix it .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">To do list</h4>
                            <div class="add-items d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="enter task..">
                                <button class="add btn btn-primary todo-list-add-btn">Add</button>
                            </div>
                            <div class="list-wrapper">
                                <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                                    <li class="completed">
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox" checked> Prepare for presentation
                                            </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Plan weekend outing </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                    <li>
                                        <div class="form-check form-check-primary">
                                            <label class="form-check-label">
                                                <input class="checkbox" type="checkbox"> Pick up kids from school </label>
                                        </div>
                                        <i class="remove mdi mdi-close-box"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit
                    2023</span>
            </div>
        </footer>
    </div>
@endsection
@section('js')
    <script src="{{ asset('assets/achart/dist/apexcharts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/achart/dist/apexcharts.css') }}" />
    <script>
        function konfirmasi(kd_pes) {
            var konf = confirm('Batalkan pesanan ini? ' + '(Kode Pesanan: ' + kd_pes + ')');
            if (konf) {
                alert('Pesanan dibatalkan! ' + '(Kode Pesanan: ' + kd_pes + ')');
                window.location.href = '/batal/' + kd_pes + '/sukses';
            } else {}
        }

        var options = {
            series: [{
                name: "Penghasilan",
                data: @json($dataTotalPendapatan)
            }],
            chart: {
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'straight'
            },
            title: {
                text: 'Data Total Pendapatan Perbulan',
                align: 'left'
            },
            grid: {
                row: {
                    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                    opacity: 0.5
                },
            },
            xaxis: {
                categories: @json($dataBulan),
            },
            yaxis: {
                labels: {
                    formatter: function(value) {
                        return value.toLocaleString("id-ID", {
                            style: "currency",
                            currency: "IDR"
                        });
                    },
                },
            }
        };

        var chart = new ApexCharts(document.querySelector("#pendapatan"), options);
        chart.render();

        var options = {
            series: [{
                name: 'Pesanan Selesai',
                data: @json($dataTotalPemesananSukses)
            }, {
                name: 'Pesanan Gagal',
                data: @json($dataTotalPemesananGagal)
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: @json($dataBulan),
            },
            yaxis: {
                title: {
                    text: 'Jumlah Pesanan'
                }
            },
            fill: {
                opacity: 1
            },
        };

        var chart = new ApexCharts(document.querySelector("#pemesanan"), options);
        chart.render();
    </script>
@endsection
