@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Social Media</h2>
    <div class="row">
      @include('admin.elements._viewsocialmedia')
        @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
          @include('admin.elements._addsocialmedia')
        @endif
    </div>
</div>
@endsection

@section('jquery')
  
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    let id = $(this).attr('id');
    console.log(id);
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    const iconName = data[0].replace(" ","-");
    let check =`<input type="hidden" name="id" value="${id}">`
    check +=`<div class=" d-flex justify-content-center align-items-center"><i class="fa fa-${iconName}" style="font-size: 31px"></i><h2 class="mt-2 ps-2">${data[0]}</h2></div>`
    check +=`<x-input name="link" label="Social Link" inputvalue="${data[2]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
  $('#socialmedia').on('change', function() {
    var txt = $(this).val();
    
    $('#name').val(txt);
    $('#iconset').html(`<i class="fa fa-${txt}" style="font-size: 31px"></i>`);
  });
@endsection

