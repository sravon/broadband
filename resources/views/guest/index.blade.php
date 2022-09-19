@extends('guest.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    @for($i = 0; $i < $slidercount; $i++)
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : null}}" aria-current="true" aria-label="Slide {{ $i+1 }}"></button>
    @endfor
  </div>
  <div class="carousel-inner">
    @foreach ($sliders as $item)
      <div class="carousel-item {{ $loop->iteration == 1 ? 'active' : null}}">
        <img src="{{ asset($item->image) }}" class="d-block w-100" alt="..." style="max-height: 400px">
      </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="animate__animated animate__flash" style="background:url({{url('assets/logo/doctors.jpg')}});background-size: cover;height: 400px;">
  <div class="container-fluid container">
    <div class="row">
      <div class="col-md-6 leftP">
        <div class="p-5">
          <h2>Home Internet</h2>
          <img src="https://www.rekupe.com/wp-content/plugins/elementor-advanced-widgets/assets/images/squiggle.svg">
          <hr>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Bufferless Steaming</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Lag Free Gaming</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Real IP Included</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Stable Connection With No Interruptions</p>
          <button class="btn btn-outline-success mt-4">View all</button>
        </div>
      </div>
      <div class="col-md-6 rightP">
        <div class="hovering">
          <a href="#">
            <img src="{{ asset('assets/logo/apoin.svg') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="animate__animated animate__flash" style="background:url({{url('assets/logo/32.jpg')}});background-size: cover;height: 400px;">
  <div class="container-fluid container">
    <div class="row">
      <div class="col-md-6 ">
        <div class="hovering">
          <a href="#">
            <img src="{{ asset('assets/logo/ambulance.svg') }}">
          </a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="p-5">
          <h2>Corporate Internet</h2>
          <img src="https://www.rekupe.com/wp-content/plugins/elementor-advanced-widgets/assets/images/squiggle.svg">
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Dedicated Network</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Business-friendly SLAs</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>24×7 Support</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Stable Flexible & Scalable Bandwidth</p>
          <button class="btn btn-outline-danger mt-4">View all</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="animate__animated animate__flash" style="background:url({{url('assets/logo/doctors.jpg')}});background-size: cover;height: 400px;">
  <div class="container-fluid container">
    <div class="row">
      <div class="col-md-6 leftP">
        <div class="p-5">
          <h2>Data Connectivity</h2>
          <img src="https://www.rekupe.com/wp-content/plugins/elementor-advanced-widgets/assets/images/squiggle.svg">
          <hr>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Optimal Performance</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>World Class Reliability</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Optical Fiber Network</p>
          <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>Symmetrical Upload & Download Speeds</p>
          <button class="btn btn-outline-success mt-4">View all</button>
        </div>
      </div>
      <div class="col-md-6 rightP">
        <div class="hovering">
          <a href="#">
            <img src="{{ asset('assets/logo/apoin.svg') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection