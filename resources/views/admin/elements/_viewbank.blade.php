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
      @foreach ($banks as $bank)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $bank->name }}</td>
          <td><img width="50" src="{{ asset($bank->image) }}" alt=""></td>
          <td data-image="{{ $bank->image }}" >
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
            <x-modal 
              type="editmodal" 
              route="bank.update,bank=>{{ $bank->id }}" 
              title="Edit Data" id="{{ $bank->id }}"/>
              @endif
              ||
              @if (Auth::user()->role === 'admin')
              <button class="btn btn-danger" onclick="deleteData('{{ route('bank.destroy',['bank'=>$bank->id]) }}')">
              Delete</button>
              @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>