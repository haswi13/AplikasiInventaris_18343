@extends('layout')
@section('container')
 
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Edit Jenis</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
                @foreach($jenis as $d)
                    <form action="/jenis/updatejenis" method="post">
                        @csrf
                        <input type="hidden" name="id_jenis" value="{{ $d->id_jenis }}">

                            <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                                <label for="nama_jenis" class="form-label">Nama Jenis</label>
                                <input type="text" class="form-control" name="nama_jenis" value="{{ $d->nama_jenis }}">
                            </div>

                            <div class="mb-3">
                                <label for="kode_jenis" class="form-label">Kode Jenis</label>
                                <input type="text" class="form-control" name="kode_jenis" value="{{ $d->kode_jenis }}">
                            </div>

                            <div class="mb-3">
                                <label for="keterangan" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="keterangan" value="{{ $d->keterangan }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                @endforeach
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