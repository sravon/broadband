@extends('guest.layouts.master')

@section('main_content')
<x-feature title="Corporate Internet" name="{{ $featureimage->image }}" />
<section class="container-fluid">
    <div class="m-2 p-2">
        <h6 class="text-center">Explore Our Corporate Internet Features</h6>
        <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
        <h2 class="text-center fw-bold">Let your business to grow with us.</h2>
        <p class="text-center">We offer a full range of fast, superfast and ultrafast broadband packages        </p>
    </div>
    <div class="container">
        <div class="row">
        @foreach ($corporateinternets as $item)
            <div class="col-md-4">
                <div class="row border shadow-sm m-1">
                    <div class="col-md-4">
                        <div class="text-danger" style="font-size:60px"><i class="fa {{$item->icon_name}}" aria-hidden="true"></i></div>
                    </div>
                    <div class="col-md-8">
                        <h4 class="">{{ $item->name }}</h4>
                        <hr>
                        @php
                            $des_array = explode("||",$item->items);
                        @endphp
                        @foreach ($des_array as $element)
                            <p class=""><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>{{ $element }}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
            
            
        </div>
    </div>
</section>
@endsection