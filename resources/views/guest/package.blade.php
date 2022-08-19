@extends('guest.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection
@section('main_content')
<section class="container-fluid">
    <div class="bg-secondary m-2 p-2">
        <h2 class="text-center">Our Packages</h2>
        <h6 class="text-center">We offer the best cost-effective solutions in the market.</h6>
    </div>
    <div class="container">
        <div class="row">
          @foreach ($packages as $package)
            
            <x-package 
              title="{{ $package->title }}"
              mb="{{ $package->mb }}"
              tk="{{ $package->tk }}"
              des="{{ $package->description }}"
            />
          @endforeach
        </div>
    </div>
</section>
@endsection