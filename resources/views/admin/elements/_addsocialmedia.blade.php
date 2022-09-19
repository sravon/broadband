<div class="col-md-4">
    <h3 class="text-center text-dark fw-bold p-3">Add Social Media</h3>
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
    
    <form action="{{ route('social_media.store') }}" class="p-3 border border-3" method="post">
      @csrf
      <div class="d-flex align-items-center">
        <div class="p-2 mt-4" id="iconset"></div>
        <x-input name="name" id="name" label="Social Media Name" readonly/>
      </div>
      
      <x-formselect id="socialmedia" name="icon" label="Select Social Media">
        <option value="facebook-official">Facebook</option>
        <option value="linkedin">linkedin</option>
        <option value="google-plus">Google Plus</option>
      </x-formselect>
      <x-input name="link" label="Social Media Link" place="Enter link"/>
      <button class="btn btn-success" type="submit">Submit</button>
    </form>
</div>