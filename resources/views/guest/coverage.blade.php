@extends('guest.layouts.master')

@section('main_content')
<x-feature title="Corporate Internet" name="{{ $featureimage->image }}" />
<section class="container-fluid container mt-2">
    <div class="w-75 mx-auto bg-secondary p-5 text-light">
        <h3 class="text-center fw-bold">COVERAGE AREA</h3>
        <div class="bg-danger w-25 mx-auto" style="height: 2px;"></div>
        <div class="mt-2  w-75 mx-auto">
            <form class="row g-3">
              <div class="col-auto">
                <select class="form-select" id="country" aria-label="Default select example">
                    <option selected>Select Your District</option>
                    @foreach ($districts as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
              </div>
            </form>
        </div>
    </div>  
</section>
<section class="container-fluid container" id="result">
  
</section>
@endsection


@section('jquery')
load_data();
function load_data(country = null)
{
  var csrf_token = $('meta[name="_token"]').attr('content');
  $.ajax({
    type: "POST",
    url: "{!! route('guest.ajax.get-area-by-country-type') !!}",
    data: {country: country, _token: csrf_token},
    success: function( data ) {
      $("#result").html(data);
    }
  });
 }
$('#country').on('change', function() {
  var txt = $(this).val() + '_'+$(this).find(":selected").text();
  load_data(txt);
});



@endsection
