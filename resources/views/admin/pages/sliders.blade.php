@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Sliders</h2>
    <div class="row">
      @include('admin.elements._viewsliders')
      @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
        @include('admin.elements._addsliders')
      @endif
    </div>
</div>
@endsection

@section('jquery')
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    let id = $(this).attr('id');
    var imag_td = $(this).closest('td');
    let image = $(imag_td).data("image");
    console.log(id);
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    let check =`<input type="hidden" name="id" value="${id}">`
    check +=`<img src="${host_url}/${image}" alt="banks" width="200">`
    check +=`<x-input name="image" datatype="file" label="Slider image" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection

