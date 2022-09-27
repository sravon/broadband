<div class="row">
    <div class="col-md-12">
        <h3 class="text-primary p-2">Add page</h3>
        <hr>
        @if ( Session::get('fail'))
        <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
      @endif
      @if (Session::get('successed'))
        <x-alert type="success" message="{{ Session::get('successed') }}"/>
      @endif
        <form action="{{ route('pages.store') }}" class="p-3 border border-3" method="post">
            @csrf
            <x-input name="name" label="Title" place="Enter Name" />
            
            <div class="mb-3">
                <label for="description" class="form-label fw-bold">Description</label>
                <textarea name="editor1" ></textarea>
                <span class="text-light">@error('editor1'){{ $message }} @enderror</span>
            </div>
            <button class="btn btn-success" type="submit">Submit</button>
        </form>
    </div>
</div>