@extends('layouts.admin1')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="container mb-150">
                <a class="btn btn-outline-success mb-2" href="/tambah-menu">Tambah Menu</a>
                <table class="table">
                    <tr class="table-active">
                        <td>Kode</td>
                        <td>Nama</td>
                        <td>Gambar</td>
                        <td>Deskripsi</td>
                        <td>Harga</td>
                        <td>Lainnya</td>
                    </tr>
                    @foreach ($menu as $m)
                        <tr>
                            <td>{{ $m->id_menu }}</td>
                            <td>{{ $m->nama }}</td>
                            <td><img src="{{ asset('') }}{{ $m->gambar }}" alt=""></td>
                            <td>{{ $m->deskripsi }}</td>
                            <td>{{ $m->harga }}</td>
                            <td>
                                <form action="/edit-menu/{{ $m->id_menu }}" method="post">
                                    @csrf
                                    <button class="btn bg-warning w-100 mb-2" type="submit">edit</button>
                                </form>
                                <form action="/hapus-menu/{{ $m->id_menu }}" method="post">
                                    @csrf
                                    {{-- <div class="popup" id="myForm">
                                        <div class="popup-content">
                                            @csrf
                                            <center>
                                                <h3>Hapus menu ini?</h3>
                                                <div class="container d-flex">
                                                    <button class="btn btn-danger w-50" type="submit">ya</button>
                                                    <div class="btn btn-secondary w-50 mx-1" onclick="closeForm()">tidak
                                                    </div>
                                                </div>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="btn bg-danger w-100"
                                        onclick="openForm()">hapus</div> --}}
                                    <button type="submit" class="btn btn-danger w-100">hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © Food n Sit
                    2023</span>
            </div>
        </footer> --}}
        </div>
    </div>
    {{-- end table --}}
    <script type="text/javascript">
        function openForm() {
            document.getElementById("myForm").style.display = "block";
        }

        function closeForm() {
            document.getElementById("myForm").style.display = "none";
        }
    </script>
@endsection
