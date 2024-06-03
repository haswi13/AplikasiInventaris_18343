@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/">Dashboard</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Data Anggota</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Data Anggota</h6>
    </nav>
  </div>
</nav>

 <!-- Main content -->
 <div class="content mt-5">
  <div class="container">
    <div class="row justify-content-center"> <!-- Menengahkan konten -->
      <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="card-title mb-0">Data Anggota</h5> <!-- Mengurangi ukuran judul -->
            <a href="createanggota"><i class="fa-solid fa-user-plus"></i></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Anggota</th>
                    <th>No Anggota</th>
                    <th>Alamat</th>
                    <th>OPSI</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $d)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $d->nama_anggota }}</td>
                    <td>{{ $d->no_anggota }}</td>
                    <td>{{ $d->alamat }}</td>
                    <td>
                      <a href="/anggota/editanggota/{{ $d->id_anggota }}"><i class="fa-solid fa-user-pen"></i></a>
                      <a href="/anggota{{ $d->id_anggota }}"><i class="fa-regular fa-trash-can"></i></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .card {
      border: 5px solid #93A0E8; /* Menambahkan garis tepi dengan ketebalan 2px dan warna hitam */
      border-radius: 10px; /* Menambahkan sudut melengkung */
  }
</style>

@endsection