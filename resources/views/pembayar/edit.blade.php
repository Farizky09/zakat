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
                                <form class="form-group" action="/pembayar/{{$pembayar->id_pembayar}}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama pembayar</label>
                                        <input type="text" class="form-control" name="nama_pembayar" value="{{$pembayar->nama_pembayar}}"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">No hp pembayar</label>
                                        <input type="text" class="form-control" name="nohp_pembayar"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <select name="jk_pembayar" class="form-select" required>
                                            value="{{ $pembayar->jk_pembayar }}" required>
                                            <option selected>Pilih jenis Kelamin</option>
                                            <option value="L" @if ($pembayar->jk_pembayar == 'L') selected @endif>
                                                Laki-laki</option>
                                            <option value="P"@if ($pembayar->jk_pembayar == 'P') selected @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_pembayar" value=""  id="exampleFormControlTextarea1" rows="3" required>{{$pembayar->alamat_pembayar}}</textarea>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" class="form-control" name="rt" value="{{$pembayar->rt}}" id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" class="form-control" name="rw" value="{{$pembayar->rw}}" id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <select name="status" class="form-select" required>
                                            value="{{ $pembayar->status }}" required>
                                            <option selected> Status </option>
                                            <option value="Siswa" @if ($pembayar->status == 'Siswa') selected @endif>
                                                Siswa</option>
                                            <option value="Guru" @if ($pembayar->status == 'Guru') selected @endif>
                                                Guru</option>
                                            <option value="Warga" @if ($pembayar->status == 'Warga') selected @endif>
                                                Warga</option>

                                        </select>

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

