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
@endsection