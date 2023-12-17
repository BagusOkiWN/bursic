@extends('pages.master')

@section('title', 'About')

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
   
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/abotus.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Learn more <em>About Us</em></h2>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Our Classes Start ***** -->
    <section class="section" id="our-classes">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-soccer-ball-o"></i> Our Goals</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-briefcase"></i> Our Work</a></a></li>
                  <li><a href='#tabs-3'><i class="fa fa-heart"></i> Our Passion</a></a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content'>
                  <article id='tabs-1'>
                    <img src="assets/images/about-image-1-940x460.jpg" alt="">
                    <h4>Our Goals</h4>
                    <p>BurSic, Bursa Classic, adalah platform yang didedikasikan untuk penggemar mobil klasik yang ingin menjelajahi dan merayakan keindahan kendaraan bersejarah. Dengan fokus utama pada pengalaman pengguna yang unik dan memuaskan, BurSic menetapkan sejumlah tujuan yang mendukung pertumbuhan dan keberlanjutan platform ini. Berikut merupakan goals dari BurSic</p>
                    <li>Menjadi platform jual beli mobil klasik terpercaya dan terlengkap di Indonesia</li>
                    <p>BurSic ingin menjadi platform jual beli mobil klasik yang terpercaya dan terlengkap di Indonesia. Hal ini dapat dicapai dengan menyediakan berbagai fitur dan layanan yang memudahkan dan menguntungkan bagi penjual dan pembeli.</p>
                    <li>Meningkatkan minat masyarakat terhadap mobil klasikMeningkatkan minat masyarakat terhadap mobil klasik</li>
                    <p>BurSic juga ingin meningkatkan minat masyarakat terhadap mobil klasik. Hal ini dapat dicapai dengan memberikan informasi dan edukasi mengenai mobil klasik yang menarik dan informatif.</p>
                    <li>Menjadi wadah bagi para pecinta mobil klasik</li>
                    <p>BurSic ingin menjadi wadah bagi para pecinta mobil klasik untuk saling bertemu, berbagi informasi, dan bertukar pengalaman. Hal ini dapat dicapai dengan mengadakan berbagai acara dan kegiatan yang menarik bagi para pecinta mobil klasik.</p>
                  </article>
                  <article id='tabs-2'>
                    <img src="assets/images/about-image-2-940x460.jpg" alt="">
                    <h4>Our Work</h4>
                    <li>Fitur posting iklan</li>
                    <p>Penjual dapat dengan mudah posting iklan mobil klasik mereka di BurSic. Iklan akan ditampilkan di halaman utama BurSic dan akan dipromosikan melalui berbagai saluran pemasaran.</p>
                    <li>Fitur pencarian</li>
                    <p>Pembeli dapat dengan mudah mencari mobil klasik yang mereka inginkan dengan menggunakan fitur pencarian yang tersedia di BurSic. Fitur pencarian memungkinkan pembeli untuk mencari mobil berdasarkan merek, model, tahun, harga, dan lokasi.</p>
                    <li>Berkolaborasi dengan komunitas mobil klasik</li>
                    <p>BurSic berkolaborasi dengan komunitas mobil klasik untuk memberikan informasi dan layanan yang lebih lengkap bagi para pecinta mobil klasik.</p>
                  </article>
                  <article id='tabs-3'>
                    <img src="assets/images/about-image-3-940x460.jpg" alt="">
                    <h4>Our Passion</h4>
                    <li>Membantu para pecinta mobil klasik</li>
                    <p>Kami ingin membantu para pecinta mobil klasik untuk menemukan mobil klasik impian mereka. Kami percaya bahwa mobil klasik dapat menjadi teman yang setia, serta dapat memberikan pengalaman berkendara yang unik dan tak terlupakan.</p>
                    <li>Meningkatkan minat masyarakat terhadap mobil klasik</li>
                    <p>Kami ingin meningkatkan minat masyarakat terhadap mobil klasik. Kami percaya bahwa mobil klasik memiliki nilai sejarah, budaya, dan estetika yang tinggi. Kami ingin mengajak masyarakat untuk lebih mengenal dan menghargai mobil klasik.</p>
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/mstg2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <h2>Send us a <em>message</em></h2>
                        <p>Your feedback is important to us. If you have any questions or suggestions, please feel free to send us a message, and we'll be in touch soon.</p>
                        <div class="main-button">
                            <a href="{{route('contact')}}">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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