<div class="col-md-6">
    <h3 class="text-center text-dark fw-bold p-3">Add Payment</h3>
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
    
    <form action="{{ route('pays.store') }}" enctype="multipart/form-data" class="p-3 border border-3" method="post">
      @csrf
      <x-input name="name" label="Pay Name" place="Enter Pay Name"/>
      <x-input name="image" label="Pay image" datatype="file"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>