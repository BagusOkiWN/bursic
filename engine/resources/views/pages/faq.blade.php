@extends('pages.master')

@section('title', 'Faq')

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
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/faq.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>FAQ</em></h2>
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
          
            <section class='tabs-content'>
              <article>
                <h4><i class="fa fa-question-circle"></i> Apa itu BurSic?</h4>
                <p>BurSic adalah platform online jual beli mobil klasik terbesar dan terpercaya di Indonesia. Kami menghubungkan penjual dan pembeli mobil klasik dengan aman dan mudah.</p>

                <br>
                    
                <h4><i class="fa fa-question-circle"></i> Bagaimana cara menjual mobil klasik saya di BurSic?</h4>
                <p>Mudah! Cukup buat akun, pasang iklan mobil Anda dengan foto dan deskripsi menarik, dan tentukan harga.</p>

                <br>
                
                <h4><i class="fa fa-question-circle"></i> Berapa biaya untuk memasang iklan di BurSic?</h4>
                <p>Kami menawarkan paket iklan dengan harga terjangkau dan fleksibel, disesuaikan dengan kebutuhan Anda.</p>

                <br>
                
                <h4><i class="fa fa-question-circle"></i> Bagaimana cara menghubungi BurSic?</h4>
                <p>Anda dapat menghubungi kami melalui email, telepon yang berada di website kami.</p>
              </article>
            </section>
        </div>
    </section>
    <!-- ***** Our Classes End ***** -->
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