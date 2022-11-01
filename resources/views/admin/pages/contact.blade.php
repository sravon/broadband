@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Contact</h2>
    <div class="row">
        <div class="col-md-12">
          <x-table 
            :th="['Name', 'Details']" 
            >
            @foreach ($contacts as $item)
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td>
                    <x-modal 
                    type="editmodal" 
                    route="contacts.update,contact=>{{ $item->id }}"
                    title="Edit Data" id="{{ $item->id }}" />
                </td>
                </tr>   
            @endforeach
            </x-table>
            <hr>
            <div class="w-25 ms-auto">
                <x-admin.featureimage image="{{$featureimage->image}}" id="{{ $featureimage->id }}"/>
            </div>
        </div>
    </div>
</div>
@endsection
@section('jquery')
    
    $(document).on('click','.incd1',function(){
      var id = $(this).closest("div").attr("id")
      console.log(id)
      $(`#${id}`).remove();
    }); 
    $('.editbtn').on('click',function(){
      $('#editmodal').modal('show');
      $tr = $(this).closest('tr');
      let id = $(this).attr('id');
      var data = $tr.children("td").map(function () {
        return $(this).text();
      }).get();
      console.log(data)
      let check =`<input type="hidden" name="id" value="${id}">`
      check +=`<x-input name="name" label="Corporate Item Name" inputvalue="${data[0]}" />`
      check +=`<div class="mb-3" id="included"><div class="d-flex justify-content-around align-items-center"><h6 class="text-center text-dark fw-bold p-3">WHAT'S INCLUDED</h6><button type="button" id="addmore1" class="btn btn-success h-25">Add More</button></div>`
      var des = `${data[1]}`
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
      $("#included").append(`<div class='plusdiv d-flex justify-content-between w-75 mx-auto mb-3' id='${parseInt(lastId) + 1}'><input type='text' class='form-control' name='description[]' required><button type='button' class='btn btn-sm btn-danger incd1'>x</button></div>`);
    })
@endsection

