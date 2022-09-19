@extends('guest.layouts.master')
@section('page_style_plugins')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
@endsection

@section('main_content')
<x-feature title="pay" name="assets/logo/slide1.jpg" />
<section class="container-fluid container mt-2">
    <div class="w-75 mx-auto">
        <div class="d-flex align-items-start">
            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                @if ($pays)
                    @php $i= 0; @endphp
                    @foreach ($pays as $item)
                        @if ($i == 0)
                            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#{{ $item['name'] }}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">{{ $item['name'] }}</button>
                        @else
                            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#{{ $item['name'] }}" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">{{ $item['name'] }}</button>
                        @endif
                        @php $i= $i + 1; @endphp
                    @endforeach
                @endif
            </div>
            <div class="tab-content" id="v-pills-tabContent">
                @if ($pays)
                    @php $i= 0; @endphp
                    @foreach ($pays as $item)
                        @if ($i == 0)
                            <div class="tab-pane fade show active" id="{{ $item['name'] }}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div>
                                    <h2 class="text-center text-danger fs-bold">Pay Through {{ $item['name'] }} App</h2>
                                    <img src="{{ asset($item['image'])  }}" class="rounded img-fluid img-thumbnail">
                                </div>
                            </div>
                        @else
                            <div class="tab-pane fade" id="{{ $item['name'] }}" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div>
                                    <h2 class="text-center text-danger fs-bold">Pay Through {{ $item['name'] }} App</h2>
                                    <img src="{{ asset($item['image'])  }}" class="rounded img-fluid img-thumbnail">
                                </div>
                            </div>
                        @endif
                        @php $i= $i + 1; @endphp
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<section class="container-fluid container">
    <div class="w-75 mx-auto">
        <h2 class="fw-bold">Pay Bill through Bank</h2>
        <div class="row">
            @foreach ($banks as $bank)
                <div class="col-md-4">
                    <div class="p-2 shadow">
                        <div class="row alert alert-danger border-0">
                            <div class="col-md-3">
                                <img src="{{ asset($bank->bank_image) }}" width="50">
                            </div>
                            <div class="col-md-9">
                                <h4 class="text-danger fw-bold">{{ $bank->bank_name }}</h4>
                                <p>Pay with your Brac bank account</p>
                            </div>
                        </div>
                        <div class="row alert alert-secondary p-2" style="margin-top:-17px">
                            <p>Account name: {{ $bank->name }}</p>
                            <p>Account no: {{ $bank->ac_no }}</p>
                            <p>Routing no: {{ $bank->r_no }}</p>
                            <p>Branch: {{ $bank->branch }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection