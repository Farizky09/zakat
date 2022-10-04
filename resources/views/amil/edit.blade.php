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
                      <h4 class="card-title">Form EDit Amil</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/amil/{{$amil->id_amil}}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Amil</label>
                                        <input type="text" class="form-control" name="nama_amil" value="{{$amil->nama_amil}}"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Hp </label>
                                        <input type="text" class="form-control" name="nohp_amil" value="{{$amil->nohp_amil}}" id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <select name="jk_amil" class="form-select" required>
                                            value="{{ $amil->jk_amil }}" required>
                                            <option value="">Pilih jenis Kelamin</option>
                                            <option value="L" @if ($amil->jk_amil == 'L') selected @endif>
                                                Laki-laki</option>
                                            <option value="P"@if ($amil->jk_amil == 'P') selected @endif>
                                                Perempuan</option>
                                        </select>
                                    </div>


                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_amil" value=""  id="exampleFormControlTextarea1" rows="3" required>{{$amil->alamat_amil}}</textarea>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RT</label>
                                        <input type="text" class="form-control" name="rt" value="{{$amil->rt}}" id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">RW</label>
                                        <input type="text" class="form-control" name="rw" value="{{$amil->rw}}" id="exampleFormControlInput1"
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

