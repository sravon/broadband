<div class="row">
    <div class="col-md-12">
        <h3 class="text-primary p-2">Edit page</h3>
        <hr>
        @if ( Session::get('fail'))
        <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
      @endif
      @if (Session::get('successed'))
        <x-alert type="success" message="{{ Session::get('successed') }}"/>
      @endif
        <form action="{{ route('pages.update',['page' =>$singlevalue->id]) }}" class="p-3 border border-3" method="post">
            @csrf
            {{ method_field('PUT') }}
            <x-input name="name" label="Title" place="Enter Name" inputvalue="{{ $singlevalue->name }}" />
            
            <div class="mb-3">
              <label for="description" class="form-label fw-bold">Description</label>
              <textarea name="editor1" >{!! $singlevalue->description !!}</textarea>
              <span class="text-light">@error('editor1'){{ $message }} @enderror</span>
            </div>
            <button class="btn btn-success" type="submit">Update</button>
        </form>
    </div>
</div>