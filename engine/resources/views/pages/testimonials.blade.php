@extends('pages.master')

@section('title', 'Testimonials')

@section('preloader')
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
@endsection

@section('content')
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/impala.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>Testimonials</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>Ammar</h4>
                                <p><em>"Saya benar-benar terkesan dengan pengalaman saya menggunakan BurSic. Mereka tidak hanya menyediakan platform yang aman untuk jual beli mobil klasik, tetapi juga membantu saya menemukan 'si permata langka' yang saya cari. Prosesnya sangat lancar, dan tim dukungan pelanggan mereka responsif dan membantu. Saya sangat merekomendasikan BurSic kepada semua penggemar mobil klasik!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Alfa</h4>
                                <p><em>"BurSic benar-benar menghadirkan revolusi dalam cara saya menjelajahi dan mengumpulkan mobil klasik. Dari desain situs yang estetis hingga alat pencarian yang canggih, saya merasa platform ini memberikan nilai tambah yang besar bagi para penggemar otomotif seperti saya."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Adam</h4>
                                <p><em>"BurSic adalah tempat yang luar biasa untuk pecinta mobil klasik seperti saya. Antarmuka pengguna yang ramah pengguna membuat penelusuran dan penjelajahan menjadi pengalaman yang menyenangkan. Saya benar-benar terkesan dengan desain intuitifnya, yang membuat proses mencari dan memilih mobil klasik menjadi begitu mudah."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Okik</h4>
                                <p><em>"Sebagai kolektor mobil klasik, saya sangat menghargai bahwa BurSic tidak hanya fokus pada penampilan visual, tetapi juga menyediakan detail-detail teknis yang penting. Ini membantu saya memilih mobil yang sesuai dengan keinginan koleksi saya, dan saya merasa pasti bahwa setiap mobil yang saya beli dari BurSic memiliki riwayat yang terdokumentasi dengan baik."</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->
@endsection

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