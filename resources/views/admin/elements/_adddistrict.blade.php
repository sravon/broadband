<div class="col-md-6">
    <h3 class="text-center text-dark fw-bold p-3">Add Coverage--</h3>
    @if (Session::get('error'))
      <div class="alert alert-danger">
          {{ Session::get('error') }}
      </div>
    @endif
    
    <form action="{{ route('district.store') }}" class="p-3 border border-3" method="post">
      @csrf
      <x-input name="name" label="District Name" place="Enter District Name"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>