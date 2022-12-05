@extends('guest.layouts.master')

@section('main_content')
<x-feature title="Ip Phone" name="{{ $featureimage->image }}" />
<section class="container-fluid mt-2">
    <div class="container">
    @foreach ($ip_phones as $item)
    @php $des_array = explode("||",$item->items); @endphp
    @if ($loop->iteration % 2 != 0)
        <div class="row">
            <div class="col-md-6">
                <div class="carousel-item active">
                    <img src="{{ asset($item->image) }}" style="width: 350px;height: 400px;" alt="" class="mx-auto d-block rounded-circle" >
                </div>
            </div>
            <div class="col-md-6 animated fadeInRight box1">
                <p class="h3 fw-bold text-center">{{ $item->name }}</p>
                <img class=" mx-auto d-block" height="40" src="{{ asset('assets/logo/underline.jpg') }}" alt="">
                <br>
                <ul>
                    @foreach ($des_array as $element)
                    <li>{{ $element }}</li>
                    @endforeach
                </ul>
                <br>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-6 animated fadeInRight box1">
                <p class="h3 fw-bold text-center">{{ $item->name }}</p>
                <img class=" mx-auto d-block" height="40" src="{{ asset('assets/logo/underline.jpg') }}" alt="">
                <br>
                <ul>
                    @foreach ($des_array as $element)
                    <li>{{ $element }}</li>
                    @endforeach
                </ul>
                <br>
            </div>
            <div class="col-md-6">
                <div class="carousel-item active">
                    <img src="{{ asset($item->image) }}" style="width: 350px;height: 400px;" alt="" class="mx-auto d-block rounded-circle" >
                </div>
            </div>
        </div>
    @endif
        
    @endforeach
    </div>
</section>
@endsection