@extends('pages.master')

@section('title', 'Car Details')

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
<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/mstg.jpg)">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="cta-content">
          <br>
          <br>
          <h2>CAR <em>DETAILS</em></h2>
          <p></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <!-- Your existing code for the carousel section -->
            <div class="row" id="tabs">
                <div class="col-lg-4">
                    <ul>
                        <!-- Your existing code for tabs -->
                    </ul>
                </div>
                <div class="col-lg-8">
                    <section class='tabs-content' style="width: 100%;">
                        <article id='tabs-1'>
                            <h4>Vehicle Specs</h4>
                            <div class="row">
                                <!-- Fetch and display car details dynamically from the database -->

                                        <div class="col-sm-6">
                                            <label>Type</label>
                                            <p>{{ $car->type }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Model</label>
                                            <p>{{ $car->nama }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Year</label>
                                            <p>{{ $car->tahun }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Color</label>
                                            <p>{{ $car->warna }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Seats</label>
                                            <p>{{ $car->kursi }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Doors</label>
                                            <p>{{ $car->pintu }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Fuel</label>
                                            <p>{{ $car->bbm }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Mileage</label>
                                            <p>{{ $car->km }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Transmission</label>
                                            <p>{{ $car->transmisi }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Engine Size (CC)</label>
                                            <p>{{ $car->cc }}</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Power (hp)</label>
                                            <p>{{ $car->power }}</p>
                                        </div>

                            </div>
                        </article>

                        <article id='tabs-2'>
                            <h4>Vehicle Description</h4>
                            <!-- Fetch and display vehicle description from the database -->
                            <p>{{ $car->description }}</p>
                        </article>

                        <article id='tabs-4'>
                            <h4>Contact Details</h4>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Seller Name</label>
                                    <p>{{ $car->penjual }}</p>
                                </div>
                                <div class="col-sm-6">
                                    <label>Seller Phone</label>
                                    <p>{{ $car->telepon }}</p>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->
@endsection

@push('aditional-css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@endpush

@push('aditional-js')
<!-- jQuery -->
<script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

<!-- Bootstrap -->
<script src="{{ asset('assets/js/popper.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

<!-- Plugins -->
<script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/imgfix.min.js') }}"></script>
<script src="{{ asset('assets/js/mixitup.js') }}"></script>
<script src="{{ asset('assets/js/accordions.js') }}"></script>

<!-- Global Init -->
<script src="{{ asset('assets/js/custom.js') }}"></script>
@endpush