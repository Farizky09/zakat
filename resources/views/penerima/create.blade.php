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
                      <h4 class="card-title">Form Tambah penerima</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/penerima/store" method="POST">

                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama penerima</label>
                                        <input type="text" class="form-control" name="nama_penerima"  id="exampleFormControlInput1"
                                            required>
                                    </div>

                                    <div class="m-3">
                                        <select name="jk_penerima" class="form-select" required>
                                            <option selected>Pilih jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_penerima"   id="exampleFormControlTextarea1" rows="3" required></textarea>
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
                                        <select name="kategori" class="form-select" required>
                                            <option selected>Pilih Kategori penerima</option>
                                            <option value="Fakir">Fakir</option>
                                            <option value="Miskin">Miskin</option>
                                            <option value="Amil">Amil</option>
                                            <option value="Mu'allaf">Muallaf</option>
                                            <option value="Riqab">Riqab</option>
                                            <option value="Gharim">Gharim</option>
                                            <option value="Fi Sabilillah">Fi Sabilillah</option>
                                            <option value="Ibnu Sabil">Ibnu Sabil</option>
                                        </select>
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

