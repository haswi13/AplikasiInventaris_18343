@extends('layout')
@section('container')

<nav class="navbar navbar-main navbar-expand-1g px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur" data-scroll="false">
  <div class="container-fluid py-0 px-3">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/">Pages</a></li>
        <li class="breadcrumb-item text-sm text-white active" aria-current="page"><a href="" style="color: white;">Dashboard</a></li>
      </ol>
      <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
    </nav>
  </div>
</nav>

<!-- Isi Card Beranda -->
<div class="container-fluid py-4">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12 mb-8">
        <div class="card mb-5">
          <div class="card-body p-5">
            <div class="row">
              <div class="col-10 text-center">
                <div class="numbers" style="text-align: center;" >
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Hallooo🙌! Eoseo Oseyo❤️ Selamat Datang Di Aplikasi AweyVentory🤩 Ini Projek Akhir Saya di kelas XI PPLG 2 
                    Yaitu Membuat Aplikasi Inventaris Lab Advance SMK NEGERI 1 BAWANG Tahun Ajaran 2023/2024 Tugas Dari Ibuk Yuliani tercinta 🥰💕 </p>
                </div>
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