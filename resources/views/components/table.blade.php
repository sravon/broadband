<div class="table-responsive">
  <table class="table display" id="myTable">
    <thead>
      <tr>
        <th scope="row">No</th>
        @foreach ($th as $item)
            <th scope="col">{{ $item }}</th>
        @endforeach
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        {{ $slot }}
    </tbody>
</table>
</div>
  