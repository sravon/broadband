@extends('guest.layouts.master')

@section('main_content')
<x-feature title="About" name="assets/logo/slide1.jpg" />
<section class="container-fluid container mt-2">
    <div class="w-75 mx-auto bg-secondary p-5 text-light">
        <h3 class="text-center fw-bold">Welcome To Broacast</h3>
        <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
        <p>{!! $about->description !!}</p>
    </div>
        
</section>
<hr>
<section class="container-fluid">
    <div class="container">
        <img class=" mx-auto d-block" height="40" src="images/underline.jpg" alt="">
        <h1 class="text-center"> <span class="text-success">M</span>ission <span class="text-info">& </span><span class="text-success">V</span>ission</h1>
        <img class="mx-auto d-block" height="40" src="images/underline.jpg" alt="">
        <br>
        <div class="row ">
           <div class="col-md-5 mbbox bg-secondary animated fadeInLeft" style="padding: 29px;">
               <div class="card text-center">
                    <div class="card-body bg-light text-dark">
                       <p class="h3">Misson</p>
                       <p>{!! $about->mission !!}</p>
                       <button class="btn btn-sm btn-outline-dark">Read More</button>
                    </div>
               </div>
           </div>
           <div class="col-md-2"></div>
           <div class="col-md-5 mbbox bg-secondary animated fadeInRight" style="padding: 29px;">
               <div class="card text-center">
                    <div class="card-body bg-light text-dark">
                       <p class="h3">Vision</p>
                       <p>{!! $about->vision !!}</p>
                       <button class="btn btn-sm btn-outline-dark">Read More</button>
                    </div>
               </div>
           </div>
        </div>
    </div>
</section>
@endsection