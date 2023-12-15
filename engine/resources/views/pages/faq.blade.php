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
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Read our <em>FAQ</em></h2>
                        <p>Ut consectetur, metus sit amet aliquet placerat, enim est ultricies ligula</p>
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
                <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet?</h4>
                <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Vel aspernatur natus dignissimos eos quod, odio.</p>

                <br>
                    
                <h4><i class="fa fa-question-circle"></i> Lorem ipsum dolor sit amet, consectetur?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad cupiditate ullam exercitationem molestiae illum? Nam magni, saepe sint maiores vitae!</p>

                <br>
                
                <h4><i class="fa fa-question-circle"></i> Laudantium dolores vitae consequatur, magnam porro repellat excepturi rerum?</h4>
                <p>Phasellus convallis mauris sed elementum vulputate. Donec posuere leo sed dui eleifend hendrerit. Sed suscipit suscipit erat, sed vehicula ligula. Aliquam ut sem fermentum sem tincidunt lacinia gravida aliquam nunc. Morbi quis erat imperdiet, molestie nunc ut, accumsan diam.</p>

                <br>
                
                <h4><i class="fa fa-question-circle"></i> Laudantium dolores vitae consequatur, magnam porro repellat excepturi rerum?</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi suscipit commodi impedit unde accusantium nam incidunt tenetur, libero maiores enim! Nisi ex odit, totam nihil doloribus. Nemo ut, eos consequatur libero aut quas dolorum ipsa, quidem, totam dicta id possimus dolores distinctio laboriosam doloribus voluptates tenetur consectetur inventore aliquid dolorem?</p>
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