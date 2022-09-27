@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Coverage List</h2>
    <div class="row">
      @include('admin.elements._viewcoverage')
      @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
        @include('admin.elements._addcoverage')
      @endif
        
    </div>
</div>
@endsection
@section('raw_javascript')
function deleteData(id){
  Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      var csrf_token = $('meta[name="_token"]').attr('content');
      var post_url = "{!! route('coverage.delete') !!}";
      $.ajax({
        type: "POST",
        url: post_url,
        data: {id: id, _token: csrf_token}, 
        success: function (data) {
          {{-- Swal.fire('Deleted!', data, 'success') --}}
          window.location.reload();
        }
      });
      
    }
  })
}
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
    
    let check =`<input type="text" name="id" value="${id}">`
    check +=`<x-input name="name" label="Your Name" inputvalue="${data[0]}" />`
    check +=`<x-input name="district" label="Your District" inputvalue="${data[1]}" />`
    check +=`<x-input name="address" label="Your Address" inputvalue="${data[3]}" />`
    check +=`<x-input name="phone" label="Your Phone" inputvalue="${data[4]}" />`
    check +=`<x-input name="code" label="Your Code" inputvalue="${data[2]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection

