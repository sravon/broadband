@extends('admin.layouts.master')
@section('main_content')
<div class="container-fluid container">
    <h2 class="text-center bg-secondary p-3 w-50 mx-auto">Package List</h2>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-responsive">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
                <h3 class="text-center text-dark fw-bold p-3">Add Package</h3>
            <form action="{{ route('package.register') }}" class="p-3 border border-3" method="post">
                @csrf
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 fw-bold col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name"  value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Mb/Gb</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="mb">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Tk</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="tk">
                    </div>
                </div>
                <div class="mb-3" id="included">
                    <div class="d-flex justify-content-around align-items-center">
                        <h6 class="text-center text-dark fw-bold p-3">WHAT'S INCLUDED</h6>
                        <button type="button" id="addmore" class="btn btn-success h-25">Add More</button>
                    </div>
                    <div class="d-flex justify-content-between w-75 mx-auto mb-3 " id="1">
                        <input type="text" class="form-control" name="description[]">
                        <button type="button" class=" btn btn-sm btn-danger incd">x</button>
                    </div>
                    <div class="d-flex justify-content-between w-75 mx-auto mb-3" id="2">
                        <input type="text" class="form-control" name="description[]">
                        <button type="button" class=" btn btn-sm btn-danger incd">x</button>
                    </div>
                    <div class="d-flex justify-content-between w-75 mx-auto mb-3" id="3">
                        <input type="text" class="form-control" name="description[]">
                        <button type="button" class=" btn btn-sm btn-danger incd">x</button>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
@section('page_scripts')
    $("#addmore").click(function(){
        var lastId = $(".incd:last-child").attr("id");
        console.log(lastId);
        $("#included").append(`<div class='d-flex justify-content-between w-75 mx-auto mb-3 incd' id='${parseInt(lastId) + 1}'><input type='text' class='form-control' name='description[]'><button type='button' class='btn btn-sm btn-danger'>x</button></div>`);
    });
    $(document).on('click','.incd',function(){
        var id = $(this).closest("div").attr("id")
        console.log(id)
        $(`#${id}`).remove();
    });
@endsection

