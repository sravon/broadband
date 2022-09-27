@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Ipphone List</h2>
    <div class="row">
      @include('admin.elements._viewipphone')
        
      @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
        @include('admin.elements._addipphone')
      @endif
    </div>
</div>
@endsection

@section('jquery')
    $("#addmore").click(function(){
      var lastId = $(".incd:last-child").attr("id");
      console.log(lastId);
      $("#included").append(`<div class='d-flex justify-content-between w-75 mx-auto mb-3 incd' id='${parseInt(lastId) + 1}'><input type='text' class='form-control' name='description[]' required><button type='button' class='btn btn-sm btn-danger'>x</button></div>`);
    });
    
    $(document).on('click','.incd',function(){
      var id = $(this).closest("div").attr("id")
      console.log(id)
      $(`#${id}`).remove();
    });
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
      check +=`<x-input name="name" label="Corporate Item Name" inputvalue="${data[0]}" />`
      check +=`<img src="${host_url}/${image}" alt="banks" width="200">`
      check +=`<x-input name="image" label="Image Name" datatype="file" />`
      check +=`<div class="mb-3" id="included"><div class="d-flex justify-content-around align-items-center"><h6 class="text-center text-dark fw-bold p-3">WHAT'S INCLUDED</h6><button type="button" id="addmore1" class="btn btn-success h-25">Add More</button></div>`
      var des = `${data[2]}`
      desArray = des.split('||')
      var count = 0;
      desArray.forEach(function(number) {
        console.log(number);
        check +=`<div class="plusdiv d-flex justify-content-between w-75 mx-auto mb-3 " id="${count +=1}"><input type="text" class="form-control" name="description[]" value="${number}" required><button type="button" class=" btn btn-sm btn-danger incd1">x</button></div>`
      });
      check +=`</div>`
      check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
      $("#editdata").html(check);
    })
    $(document).on('click','#addmore1',function(){
      var lastId = $(".plusdiv:last-child").attr("id");
      console.log(lastId);
      $("#included").append(`<div class='plusdiv d-flex justify-content-between w-75 mx-auto mb-3 incd' id='${parseInt(lastId) + 1}'><input type='text' class='form-control' name='description[]' required><button type='button' class='btn btn-sm btn-danger'>x</button></div>`);
    })
@endsection

