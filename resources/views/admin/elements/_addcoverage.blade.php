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
    
    <form action="{{ route('coverage.register') }}" class="p-3 border border-3" method="post">
      @csrf
      <x-input name="name" label="Your Name" place="Enter your Name"/>
      <x-input name="address" label="Your address" place="Enter your address"/>
      <x-formselect name="district">
        <option value="1">1</option>
        <option value="2">2</option>
      </x-formselect>
      <x-input name="code" label="Your post code" place="Enter your post code"/>
      <x-input name="phone" label="Your phone number" place="Enter your phone"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>