@extends('pages.master')

@section('title', 'Form Mobil')

@section('content')
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/mstg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Iklankan Mobil <em> Klasik Anda!</em></h2>
                        <p>Silahkan masukkan data mobil klasik anda!</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

<section class="section" id="trainers">
        <div class="container">
           <div class="card-header">
              <br>
             <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('mobil.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tipe</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Masukkan Tipe Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mobil</label>
                    <input type="text" class="form-control" id="mobil" name="nama" placeholder="Masukkan Nama Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Warna</label>
                    <input type="text" class="form-control" id="warna" name="warna" placeholder="Masukkan Warna Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tahun</label>
                    <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Kursi</label>
                    <input type="text" class="form-control" id="kursi" name="kursi" placeholder="Masukkan Jumlah Kursi Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pintu</label>
                    <input type="text" class="form-control" id="pintu" name="pintu" placeholder="Masukkan Jumlah Pintu">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis BBM</label>
                    <input type="text" class="form-control" id="bbm" name="bbm" placeholder="Masukkan Jenis BBM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kilometer</label>
                    <input type="text" class="form-control" id="km" name="km" placeholder="Masukkan Kilometer">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Transmisi</label>
                    <input type="text" class="form-control" id="transmisi" name="transmisi" placeholder="Masukkan Transmisi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kapasitas Mesin</label>
                    <input type="text" class="form-control" id="cc" name="cc" placeholder="Masukkan Kapasitas Mesin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Power</label>
                    <input type="text" class="form-control" id="power" name="power" placeholder="Masukkan Power Mesin">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penjual</label>
                    <input type="text" class="form-control" id="penjual" name="penjual" placeholder="Masukkan Nama Penjual">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Masukkan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Masukkan Harga">
                  </div>
                  <div class="form-group">
                      <label for="desc">Deskripsi</label>
                      <textarea class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi Mobil"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="gambar">Upload Foto Mobil</label>
                    <input type="file" class="form-control" id="gambar" name="gambar">
                  </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
        </div>
</section>
@endsection

@push('aditional-css')
<link rel="stylesheet" href="path-to-aditional-css.css">
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush
@push('aditional-css')
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/style.css">
@endpush

@push('aditional-js')
<!-- jQuery -->
<script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script>
<script src="assets/js/mixitup.js"></script>
<script src="assets/js/accordions.js"></script>

<!-- Global Init -->
<script src="assets/js/custom.js"></script>
@endpush