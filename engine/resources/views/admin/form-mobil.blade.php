@extends('admin.masteradmin')

@section('title', 'Form Mobil')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Tambah Data Mobil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Data Mobil</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Mobil</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" novalidate="novalidate" method="POST" action="{{ route('mobil.store') }}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mobil</label>
                  <input type="text" class="form-control" id="mobil" name="nama" placeholder="Masukkan Nama Mobil">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Tahun</label>
                  <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Masukkan Tahun Mobil">
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
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

@push('aditional-css')
    <link rel="stylesheet" href="path-to-aditional-css.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
@endpush

@push('aditional-js')
    <script src="path-to-aditional-script.js"></script>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard2.js"></script>
@endpush