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
                      <h4 class="card-title">Form Tambah Amil</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <form class="form-group" action="/amil/store" method="POST">

                                    @csrf
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama Amil</label>
                                        <input type="text" class="form-control" name="nama_amil"  id="exampleFormControlInput1"
                                            required>
                                    </div>
                                    <div class="m-3">
                                        <label for="exampleFormControlInput1" class="form-label">No Hp </label>
                                        <input type="text" class="form-control" name="nohp_amil"  id="exampleFormControlInput1"
                                             required>
                                    </div>
                                    <div class="m-3">
                                        <select name="jk_amil" class="form-select" required>
                                            <option selected>Pilih jenis Kelamin</option>
                                            <option value="L">Laki-laki</option>
                                            <option value="P">Perempuan</option>
                                        </select>
                                    </div>


                                    <div class="m-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                                        <textarea class="form-control" name="alamat_amil"   id="exampleFormControlTextarea1" rows="3" required></textarea>
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

                                    <input type="submit" class="btn btn-primary m-3" name="submit" value="Simpan">
                                </form>
                            </table>
                          </div>
                      </div>
                    </div>
                </div>
            </div>



                      {{--  <div class="card-body">
                        <p>
                          You can also invert the colors—with dark text on light
                          backgrounds—with
                          <code class="highlighter-rouge">.table-light</code>.
                        </p>
                      </div>

                <div class="row">

                    <h1 class="col-10">Tabel Data Mustahik</h1>
                </div>
                <div class="col-sm-12">
                    <div class="bg-light rounded h-100 p-4">
                        <a href="amil/create" class="btn btn-primary mb-4 ">Tambah Mustahik</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td> Id Amil</td>
                                    <td>Nama AMil</td>
                                    <td>jenis kelamin</td>
                                    <td>No hp </td>
                                    <td>Alamat</td>
                                    <td class="text-center">Aksi</td>
                                </tr>
                            </thead>

                            @foreach ($amil as $amil)
                                <tbody>
                                    <tr>
                                        <td>{{ $amil->id_amil }}</td>
                                        <td>{{ $amil->nama_amil }}</td>
                                        <td>{{ $amil->jk_amil }}</td>
                                        <td>{{ $amil->nohp_amil }}</td>
                                        <td>{{ $amil->alamat_amil }}</td>

                                        <td class=" text-center">
                                            <form action="/amil-delete/{{ $amil->id_amil }}" class="mb-0" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-danger btn-sm mx-1 mb-0 " type="submit"
                                                    onclick="return confirm('apakah anda yakin ingin dihapus?')"
                                                    value="Delete">
                                                <a href="/amil/{{ $amil->id_amil }}/edit"
                                                    class="btn btn-warning btn-sm mx-1  mb-0" data-toggle="tooltip"
                                                    data-original-title="Edit user">
                                                    Edit
                                                </a>
                                            </form>
                                        </td>


                                    </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
  --}}



    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

<!-- Need: Apexcharts -->
<script src="{{ asset('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

</body>

</html>

