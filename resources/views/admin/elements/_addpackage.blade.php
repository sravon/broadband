<div class="col-md-4">
  <h3 class="text-center text-dark fw-bold p-3">Add Corporate Internet</h3>
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
  @php
    $message="ddd"
  @endphp
  <form action="{{ route('package.register') }}" class="p-3 border border-3" method="post">
      @csrf
      <div class="mb-3 row">
          <label for="name" class="col-sm-2 fw-bold col-form-label">Name</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="name"  value="">
            @error('name') <x-alert type="error" message="{{ $message }}"/>
            @enderror
          </div>
      </div>
      <div class="mb-3 row">
          <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Mb/Gb</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="mb" value="{{ old('mb') }} ">
            @error('mb') <x-alert type="error" message="{{ $message }}"/> @enderror
          </div>
      </div>
      <div class="mb-3 row">
          <label for="inputPassword" class="fw-bold col-sm-2 col-form-label">Tk</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tk">
            @error('tk') <x-alert type="error" message="{{ $message }}"/> @enderror
          </div>
      </div>
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
  <hr>
  <div class="border p-2">
    <h4>Feature Image</h4>
    <img width="200" src="{{ asset($featureimage->image) }}" alt="fff">
    <form action="{{ route('admin.updatefeatureimage',['id' => $featureimage->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <x-input name="image" label="Change Name" datatype="file" />
      <button type="submit" class="btn btn-warning" name="submit">update</button>
    </form>
  </div>
</div>