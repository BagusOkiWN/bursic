@extends('pages.master')

@section('title', 'Cars')

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
<!-- ***** Call to Action Start ***** -->
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/coba.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="cta-content">
                    <br>
                    <br>
                    <h2>Our <em>Cars</em></h2>
                    <p>Temukan mobil impianmu disini!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Call to Action End ***** -->

<!-- ***** Fleet Starts ***** -->
<section class="section" id="trainers">
    <div class="container">
        <br>
        <br>

        <div class="row">
            @foreach ($cars as $car)
            <div class="col-lg-4">
                <div class="trainer-item">
                    <div class="image-thumb">
                        <!-- Use the car's image from the database -->
                        <img src="{{ asset('uploads/' . $car->gambar) }}" alt="{{ $car->name }}" style="width: 320px; height: 200px;">
                    </div>
                    <div class="down-content">
                        <span>
                            <sup>Rp</sup>{{ $car->harga }} &nbsp;
                        </span>

                        <h4>{{ $car->nama }}</h4>

                        <p>
                            <i class="fa fa-dashboard"></i> {{ $car->power }} &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cube"></i> {{ $car->cc }} cc &nbsp;&nbsp;&nbsp;
                            <i class="fa fa-cog"></i> {{ $car->transmisi }} &nbsp;&nbsp;&nbsp;
                        </p>

                        <ul class="social-icons">
                            <li><a href="{{ route('cardetails', ['id' => $car->id]) }}">+ View Car</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination or any other content you want to add -->

        <br>
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