<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <x-side-bar></x-side-bar>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Form Edit pembayar</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table align-items-center mb-0">
                                    <form class="form-group" action="/pembayaran/{{ $pembayaran->id }}" method="POST">
                                        @method('put')
                                        @csrf

                                        <h1>Data Pembayar</h1><br>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama
                                                pembayar</label>
                                            <input type="text" class="form-control" name="nama_pembayar"
                                                value="{{$pembayaran->nama_pembayar}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">No hp
                                                pembayar</label>
                                            <input type="text" class="form-control" name="nohp_pembayar"
                                                value="{{$pembayaran->nohp_pembayar}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <select name="jk_pembayaran" class="form-select" required>
                                                value="{{ $pembayaran->jk_pembayar }}" required>
                                                <option selected>Pilih jenis Kelamin</option>
                                                <option value="L" @if ($pembayaran->jk_pembayar == 'L') selected @endif>
                                                    Laki-laki</option>
                                                <option value="P"@if ($pembayaran->jk_pembayar == 'P') selected @endif>
                                                    Perempuan</option>
                                            </select>
                                        </div>


                                        <div class="m-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                            <textarea class="form-control" name="alamat_pembayar" value="" id="exampleFormControlTextarea1" rows="3"
                                                required>{{$pembayaran->alamat_pembayar}}</textarea>
                                        </div>

                                        <h1>Data Zakat</h1>
                                        <div class="m-3">
                                            <select name="nama_zakat" class="form-select" required>
                                                value="{{ $pembayaran->nama_zakat }}" required>
                                                <option selected>Pilih jenis Kelamin</option>
                                                <option value="Zakat Fitrah" @if ($pembayaran->nama_zakat == 'Zakat Fitrah') selected @endif>
                                                    Zakat Fitrah</option>
                                                <option value="Zakat Mal"@if ($pembayaran->nama_zakat == 'Zakat Mal') selected @endif>
                                                    ZAkat mal</option>
                                            </select>
                                        </div>

                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pembayaran
                                                Beras</label>
                                            <input type="text" class="form-control" name="pembayaran_beras"
                                                value="{{$pembayaran->pembayaran_beras}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Pembayaran
                                                Uang</label>
                                            <input type="text" class="form-control" name="pembayaran_uang"
                                                value="{{$pembayaran->pembayaran_uang}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Total
                                                tanggungan</label>
                                            <input type="text" class="form-control" name="jml_tanggungan"
                                              value="{{$pembayaran->jml_tanggungan}}"  id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jumlah
                                                Pembayaran</label>
                                            <input type="text" class="form-control" name="total_pembayaran"
                                               value="{{$pembayaran->total_pembayaran}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Nama Amil</label>
                                            <input type="text" class="form-control" name="nama_amil"
                                               value="{{$pembayaran->nama_amil}}" id="exampleFormControlInput1" required>
                                        </div>
                                        <div class="m-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tanggal
                                                Pembayaran</label>
                                            <input type="date" class="form-control" name="tgl_penyerahan"
                                                value="{{$pembayaran->tgl_penyerahan}}" id="exampleFormControlInput1" required>
                                        </div>

                                        <input type="submit" class="btn btn-primary m-3" name="submit"
                                            value="Simpan">
                                    </form>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
            <script src="{{ asset('assets/js/app.js') }}"></script>

            <!-- Need: Apexcharts -->
            <script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
            <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

</body>

</html>
