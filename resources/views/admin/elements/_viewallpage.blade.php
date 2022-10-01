<div class="col-md-10 mx-auto">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Description']" 
    >
      @foreach ($pages as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{!! $item->description !!}</td>
          <td>
            <a target="_blank" class="btn btn-secondary" href="{{ route('guest.page',['id' => $item->id ]) }}">View</a>
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <a class="btn btn-primary" href="?source=edit&id={{ $item->id }}">Edit</a>
            @endif
             ||
            @if (Auth::user()->role === 'admin')
              <button class="btn btn-danger" 
              onclick="deleteData('{{ route('pages.destroy',['page'=>$item->id]) }}')">
            Delete</button>
            @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>