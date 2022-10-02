<div class="border p-2">
    <h4>Feature Image</h4>
    <img width="200" src="{{ asset($image) }}" alt="fff">
    <form action="{{ route('admin.updatefeatureimage',['id' => $id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <x-input name="image" label="Change Name" datatype="file" />
      <button type="submit" class="btn btn-warning" name="submit">update</button>
    </form>
  </div>