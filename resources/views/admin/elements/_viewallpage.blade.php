<div class="col-md-10 mx-auto">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Description','Page Link']" 
    >
      @foreach ($pages as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td class="col-md-4">
            @php
              $substrings = substr($item->description, 0, 100);
              $finalstr = strrpos($substrings, ' ');
            @endphp
             {{ $substrings }}</td>
          <td>
            @php $flag = 0; @endphp
            @foreach ($alreadylinkpageid as $linkpageid)
              @if ($linkpageid->pageid == $item->id)
                @php $flag = 1; @endphp
              @endif
            @endforeach
            @if (!$flag )
              <button class="btn btn-warning text-white" data-id="{{ $item->id }}" id="linkservice">Link To Service Page</button>
            @else
              <p class="text-success">Linked to subpage of service page</p>
            @endif
          </td>
          <td>
            <a target="_blank" class="btn btn-secondary mb-1" href="{{ route('guest.page',['id' => $item->id ]) }}">View</a>
            <br>
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <a class="btn btn-success mb-1" href="?source=edit&id={{ $item->id }}">Edit</a>
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