<div class="container-fluid alert alert-secondary" style="--bs-alert-padding-y: 0rem;
--bs-alert-margin-bottom: 0rem;"><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info">
            <ul class="nav nav-pills">
              <li class="nav-item"><a href="" class="nav-link disabled text-dark"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
              <li class="nav-item"><a href="" class="nav-link disabled text-dark"><i class="fa fa-envelope"></i> info@domain.com</a></li>
            </ul>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="pull-right">
            <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
            <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
            <button class="btn top_btn"><i class="fa fa-linkedin"></i></button>
            <button class="btn top_btn"><i class="fa fa-google-plus"></i></button>
            <button class="btn top_btn"><i class="fa fa-linkedin"></i></button>
            <input type="text" placeholder="Search..">
          </div>
        </div>
      </div>
    </div>
</div><!--/header_top-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid container">
    <a class="navbar-brand" href="#">
      <img class="img-fluid mx-auto" src="{{ asset('assets/logo/bcl.png') }}" width="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('guest.package') }}">Home Internet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guest.package') }}">Corporate Internet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guest.package') }}">Coverage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guest.pay') }}">Bill Pay</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guest.contacts') }}">Contacts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
