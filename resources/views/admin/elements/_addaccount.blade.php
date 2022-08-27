<div class="col-md-4">
    <h3 class="text-center text-dark fw-bold p-3">Add Coverage--</h3>
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
      <x-input name="name" label="Your Name" place="Enter your Name"/>
      <x-input name="ac_no" label="Your Account no" place="Enter Account No"/>
      <x-formselect name="bank">
        <option value="11">11</option>
        <option value="12">12</option>
      </x-formselect>
      <x-input name="r_no" label="Route No" place="Enter Route No"/>
      <x-input name="branch" label="Your branch name" place="Enter branch name"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>