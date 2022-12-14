<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Image']" 
    >
      @foreach ($sliders as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td><img width="50" src="{{ asset($item->image) }}" alt=""></td>
          <td data-image="{{ $item->image }}">
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <x-modal 
              type="editmodal" 
              route="sliders.update,slider=>{{ $item->id }}"
              title="Edit Data" id="{{ $item->id }}" />
              @endif
              ||
              @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
                <button class="btn btn-danger" 
                onclick="deleteData('{{ route('sliders.destroy',['slider'=>$item->id]) }}')">
              Delete</button>
              @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>