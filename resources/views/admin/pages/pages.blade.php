@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">About</h2>
    @if (request()->filled('source') && request()->source == 'add')
        @include('admin.elements._addpage')
    @elseif (request()->filled('source') && request()->source == 'edit' && request()->filled('id'))
        @include('admin.elements._editpage')
    @else
    @include('admin.elements._viewallpage')
    @endif
</div>
@endsection
@section('raw_javascript')
    CKEDITOR.replace('editor1');
@endsection

@section('jquery')
$('#linkservice').on('click', function() {
    load_data($(this).attr("data-id"),0)
})
function load_data(page = null,subpage)
{
  var csrf_token = $('meta[name="_token"]').attr('content');
  $.ajax({
    type: "POST",
    url: "{!! route('menus.store') !!}",
    data: {page_id: page,subpage:0, _token: csrf_token},
    success: function( data ) {
      if(data){
        SuccessSms("Linking success")
        setTimeout(function(){window.location.reload(); }, 2000);
        
      }else{
        ErrorSms()
      };
    }
  });
 }
$('#country').on('change', function() {
  var txt = $(this).val() + '_'+$(this).find(":selected").text();
  load_data(txt);
});

@endsection



