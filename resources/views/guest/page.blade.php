@extends('guest.layouts.master')

@section('main_content')
<x-feature title="{{ $page->name }}" name="assets/logo/slide1.jpg" />
<section class="container-fluid container mt-2">
    <div class="w-75 mx-auto bg-secondary p-5 text-light">
        <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
        <p>{!! $page->description !!}</p>
    </div>
        
</section>

@endsection