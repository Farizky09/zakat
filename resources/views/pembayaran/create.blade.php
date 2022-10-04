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
                      <h4 class="card-title">Form Tambah pembayar</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/pembayaran/store" method="POST">

                                    @csrf

                                    <h1>Data Pembayar</h1><br>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama pembayar</label>
                                        <input type="text" class="form-control" name="nama_pembayar"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">No hp pembayar</label>
                                        <input type="text" class="form-control" name="nohp_pembayar"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                        <select name="jk_pembayar" class="form-select" required>
                                            <option selected>Pilih jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_pembayar"   id="exampleFormControlTextarea1" rows="3" required></textarea>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" class="form-control" name="rt"  id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" class="form-control" name="rw"  id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                                        <select name="status" class="form-select" required>
                                            <option selected></option>
                                            <option value="Siswa">Siswa</option>
                                            <option value="Guru">Guru</option>
                                            <option value="Warga">Warga</option>
                                        </select>
                                    </div>

                                    <h1>Data Zakat</h1>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Jenis Zakat</label>
                                        <select name="id_zakat" class="form-select" required>
                                            <option selected></option>
                                            @foreach ($zakat as $zakat)
                                            <option value="{{$zakat->id}}">{{$zakat->nama_zakat}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pembayaran Beras</label>
                                        <select name="pembayaran_beras" class="form-select" required>
                                            <option value="0" selected></option>
                                            <option value="2.5">2.5KG</option>
                                            <option value="2.7">2.7KG</option>
                                            <option value="3.0">3KG</option>
                                        </select>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Pembayaran Uang</label>
                                        <input type="text" class="form-control" name="pembayaran_uang"  id="exampleFormControlInput1"
                                             >
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Total tanggungan</label>
                                        <input type="text" class="form-control" name="jml_tanggungan"  id="exampleFormControlInput1"
                                             required>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Amil</label>
                                        <input type="text" class="form-control" name="nama_amil"  id="exampleFormControlInput1"
                                             value="{{ Auth::user()->name }}" readonly required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Tanggal Pembayaran</label>
                                        <input type="date" class="form-control" name="tgl_penyerahan"  id="exampleFormControlInput1"
                                             required>
                                    </div>

                                    <input type="submit" class="btn btn-primary m-3" name="submit" value="Simpan">
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

