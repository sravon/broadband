@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">District List</h2>
    <div class="row">
      @include('admin.elements._viewdistrict')
        @include('admin.elements._adddistrict')
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
      var post_url = `{{ route('district.destroy', ':district') }}`;
      post_url = post_url.replace(':district', id);
      console.log(post_url)
      $.ajax({
        type: "DELETE",
        headers: {'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')},
        url: post_url,
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
    check +=`<x-input name="name" label="District Name" inputvalue="${data[0]}" />`
    check +=`<button class="btn btn-primary" type="submit" name="submit">update</button>`
    $("#editdata").html(check);
  })
@endsection

