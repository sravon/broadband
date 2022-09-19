<div class="col-md-4">
    <h3 class="text-center text-dark fw-bold p-3">Add Sliders</h3>
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
    <form action="{{ route('sliders.store') }}" enctype="multipart/form-data" class="p-3 border border-3" method="post">
      @csrf
      <x-input name="image" label="Add Sliders" datatype="file" place="Enter link"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>