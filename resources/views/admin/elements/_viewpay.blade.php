<div class="col-md-6">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Image']" 
    >
      @foreach ($pays as $pay)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $pay->name }}</td>
          <td><img width="50" src="{{ asset($pay->image) }}" alt=""></td>
          <td data-image="{{ $pay->image }}" >
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
            <x-modal 
              type="editmodal" 
              route="pays.update,pay=>{{ $pay->id }}" 
              title="Edit Data" id="{{ $pay->id }}"/>
            @endif
              ||
            @if (Auth::user()->role === 'admin')
              <button class="btn btn-danger" onclick="deleteData('{{ route('pays.destroy',['pay'=>$pay->id]) }}')">
              Delete</button>
            @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>