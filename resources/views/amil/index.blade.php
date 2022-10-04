<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Datatable Jquery - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main/app-dark.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}" type="image/png">

<link rel="stylesheet" href="{{ asset('assets/css/pages/fontawesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/pages/datatables.css') }}">

</head>

<body>
    <div id="app">
        <x-side-bar></x-side-bar>

        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>DataTable Jquery</h3>
                <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery required)</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active" aria-current="page">Amil</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Tables start -->
    <section class="section">
        <div class="card">
            <div class="card-header">
                <a href="/masjid/create"><button class="btn btn-primary ">Tambah data</button></a>
            </div>
            <div class="card-body">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                          <th>Id</th>
                          <th>Nama</th>
                          <th>No hp</th>
                          <th>Jenis Kelamin</th>
                          <th>Alamat</th>
                          <th>RT</th>
                          <th>RW</th>

                          <th class="text-center">ACTION</th>
                        </tr>
                      </thead>
                      @foreach ($amil as $amil)
                      <tbody>
                          <tr>
                              <td>{{ $amil->id_amil }}</td>
                              <td>{{ $amil->nama_amil }}</td>
                              <td>{{ $amil->nohp_amil }}</td>
                              <td>{{ $amil->jk_amil }}</td>
                              <td>{{ $amil->alamat_amil }}</td>
                              <td>{{ $amil->rt }}</td>
                              <td>{{ $amil->rw }}</td>

                              <td class=" text-center">
                                  <form action="/amil-delete/{{ $amil->id_amil }}" class="mb-0" method="POST">
                                      @csrf
                                      @method('delete')
                                      <input class="btn btn-outline-danger btn-sm mx-1 mb-0 " type="submit"
                                          onclick="return confirm('apakah anda yakin ingin dihapus?')"
                                          value="Delete">
                                      <a href="/amil/{{ $amil->id_amil }}/edit"
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

    </section>
    <!-- Basic Tables end -->
</div>

        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

        <script src="{{ asset('assets/extensions/jquery/jquery.min.js') }}"></script>
        <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script>
        <script src="{{ asset('assets/js/pages/datatables.js') }}"></script>

</body>

</html>
