<div class="col-md-4">
    <h6 class="text-center text-dark fw-bold p-3">Add Corporateinternet</h6>
    @if (Session::get('error'))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
    @endif
    @if (Session::get('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
      </div>
    @endif
    
    <form action="{{ route('accounts.store') }}" class="p-3 border border-3" method="post">
      @csrf
      <x-input name="name" label="Corporate Name" place="Enter Corporate Name"/>
      <x-input name="icon_name" label="Icon name" place="Enter Icon Name"/>
      <div class="mb-3" id="included">
        <div class="d-flex justify-content-around align-items-center">
            <h6 class="text-center text-dark fw-bold p-3">WHAT'S INCLUDED</h6>
            <button type="button" id="addmore" class="btn btn-success h-25">Add More</button>
        </div>
        <div class="d-flex justify-content-between w-75 mx-auto mb-3 " id="1">
            <input type="text" class="form-control" name="description[]" required>
            <button type="button" class=" btn btn-sm btn-danger incd">x</button>
        </div>
        <div class="d-flex justify-content-between w-75 mx-auto mb-3" id="2">
            <input type="text" class="form-control" name="description[]" required>
            <button type="button" class=" btn btn-sm btn-danger incd">x</button>
        </div>
        <div class="d-flex justify-content-between w-75 mx-auto mb-3" id="3">
            <input type="text" class="form-control" name="description[]" required>
            <button type="button" class=" btn btn-sm btn-danger incd">x</button>
        </div>
    </div>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>