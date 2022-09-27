<div class="col-md-6">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Distirct']" 
    >
      @foreach ($districts as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <x-modal 
              type="editmodal" 
              route="district.update,district=>{{ $item->id }}" 
              title="Edit Data" id="{{ $item->id }}" />
            @endif
              ||
              @if (Auth::user()->role === 'admin')
                <button class="btn btn-danger" onclick="deleteData({{ $item->id }})">
                Delete</button>
              @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>