@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Bank List</h2>
    <div class="row">
        @include('admin.elements._viewbank')
        @include('admin.elements._addbank')
    </div>
</div>
@endsection

@section('jquery')
  
  $('.editbtn').on('click',function(){
    $('#editmodal').modal('show');
    $tr = $(this).closest('tr');
    var imag_td = $(this).closest('td');
    let id = $(this).attr('id');
    let image = $(imag_td).data("image");;
    console.log(image);
    var data = $tr.children("td").map(function () {
      return $(this).text();
    }).get();
    console.log(data)
    let check =`<input type="text" name="id" value="${id}">`
    check +=`<x-input name="name" label="District Name" inputvalue="${data[0]}" />`
    check +=`<img src="${host_url}/${image}" alt="banks">`
    check +=`<x-input name="image" label="Image Name" datatype="file" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection
