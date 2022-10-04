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
                        <a href="/masjid/create"><button class="btn btn-primary float-end">Tambah data</button></a>
                      <h4 class="card-title">Tabel Data masjid</h4>
                    </div>
                    <div class="card-content">
                      <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-primary table-striped  mb-0">
                              <thead>
                                <tr>
                                  <th>Id</th>
                                  <th>Nama</th>
                                  <th>Alamat</th>
                                  <th>RT</th>
                                  <th>RW</th>

                                  <th class="text-center">ACTION</th>
                                </tr>
                              </thead>
                              @foreach ($masjid as $masjid)
                              <tbody>
                                  <tr>
                                     <td>{{$masjid->id_masjid}}</td>
                                     <td>{{$masjid->nama_masjid}}</td>
                                     <td>{{$masjid->alamat_masjid}}</td>
                                     <td>{{$masjid->rt}}</td>
                                     <td>{{$masjid->rw}}</td>

                                      <td class=" text-center">
                                          <form action="/masjid-delete/{{ $masjid->id_masjid }}" class="mb-0" method="POST">
                                              @csrf
                                              @method('delete')
                                              <input class="btn btn-outline-danger btn-sm mx-1 mb-0 " type="submit"
                                                  onclick="return confirm('apakah anda yakin ingin dihapus?')"
                                                  value="Delete">
                                              <a href="/masjid/{{ $masjid->id_masjid }}/edit"
                                                  class="btn btn-outline-warning btn-sm mx-1  mb-0" data-toggle="tooltip"
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

