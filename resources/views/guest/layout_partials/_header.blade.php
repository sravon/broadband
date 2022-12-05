<div class="container-fluid alert alert-secondary" style="--bs-alert-padding-y: 0rem;
--bs-alert-margin-bottom: 0rem;"><!--header_top-->
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info">
            <ul class="nav nav-pills">
              @for ($i = 1; $i < count($commondata->contacts); $i++)
                @php
                  $des_array = explode("||",$commondata->contacts[$i]->description);
                @endphp
                @foreach ($des_array as $element)
                  <li class="nav-item">
                    <a class="nav-link disabled text-dark"><i class="fa fa-{{ $i == 2 ? 'phone' : 'envelope'  }}"></i> {{ $element }}</a>
                  </li>
                @endforeach
              @endfor
            </ul>
          </div>
          
        </div>
        <div class="col-md-6">
          <div class="pull-right">
            @foreach ($commondata->socialmedia as $item)
              <a href="{{ $item->link }}" class="btn top_btn"><i class="fa fa-{{$item->icon}}"></i></a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
</div><!--/header_top-->

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top px-lg-5">
    <a class="navbar-brand" href="/">
      <img class="img-fluid mx-auto" src="{{ asset($commondata->setting->logo) }}" width="200" height="60">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto pe-3" id="mainmenu">
        <li class="nav-item px-2 {{ \Request::route()->getName() == 'guest.index'? 'activemenu' : '' }}">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item dropdown {{ (request()->segment(1) =='service') ? 'activemenu' : '' }}"">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Service
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li class=""><a class="nav-link text-dark" href="{{ route('guest.corporateinternet') }}">Corporate Internet</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="nav-link text-dark" href="{{ route('guest.package') }}">Package</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="nav-link text-dark" href="{{ route('guest.ipphones') }}">Ip Phone</a></li>
            @foreach ($commondata->submenuofservice as $item)
              <li><hr class="dropdown-divider"></li>
              <li><a class="nav-link text-dark" href="{{ url("/pages/{$item->pageid}") }}">{{ $item->name }}</a></li>
            @endforeach
          </ul>
        </li>
        <li class="nav-item {{ (request()->is('coverage')) ? 'activemenu' : '' }}">
          <a class="nav-link" href="{{ route('guest.coverage') }}">Coverage</a>
        </li>
        <li class="nav-item {{ (request()->is('pay')) ? 'activemenu' : '' }}">
          <a class="nav-link" href="{{ route('guest.pay') }}">Bill Pay</a>
        </li>
        <li class="nav-item {{ (request()->is('contacts')) ? 'activemenu' : '' }}">
          <a class="nav-link" href="{{ route('guest.contacts') }}">Contacts</a>
        </li>
        <li class="nav-item {{ (request()->is('about')) ? 'activemenu' : '' }}">
          <a class="nav-link" href="{{ route('guest.about') }}">About</a>
        </li>
        @foreach ($commondata->perentmenu as $item)
          <li class="nav-item }}">
            <a class="nav-link" href="{{ url("/pages/{$item->pageid}") }}">{{ $item->name }}</a>
          </li>
        @endforeach
      </ul>
    </div>
</nav>
