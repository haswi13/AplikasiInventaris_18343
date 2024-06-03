@extends('layout')
@section('container')
 
  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row justify-content-center"> <!-- Menengahkan konten -->
        <div class="col-lg-8"> <!-- Mengurangi lebar kolom agar lebih proporsional -->
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">Tambah Jenis Barang</h5> <!-- Mengurangi ukuran judul -->
            </div>
            <div class="card-body">
              <form action="storejenis" method="POST">
                {{ csrf_field() }}
                <div class="mb-3"> <!-- Menambah margin bottom untuk setiap form-group -->
                  <label for="nama_jenis" class="form-label">Nama Jenis</label>
                  <input type="text" class="form-control" id="nama_jenis" name="nama_jenis">
                </div>
                <div class="mb-3">
                  <label for="kode_jenis" class="form-label">Kode Jenis</label>
                  <input type="text" class="form-control" id="kode_jenis" name="kode_jenis">
                </div>
                <div class="mb-3">
                    <label for="keterangan" class="form-label">Keterangan</label>
                    <input type="text" class="form-control" id="keterangan" name="keterangan">
                </div>
        
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
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