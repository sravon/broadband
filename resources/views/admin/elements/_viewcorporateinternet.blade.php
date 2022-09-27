<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Icon Name', 'Items',]" 
    >
      @foreach ($corporateInternet as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->icon_name }}</td>
          <td>{{ $item->items }}</td>
          <td>
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <x-modal 
              type="editmodal" 
              route="accounts.update,account=>{{ $item->id }}"
              title="Edit Data" id="{{ $item->id }}" /> 
            @endif
              ||
            @if (Auth::user()->role === 'admin')
              <button class="btn btn-danger" 
                onclick="deleteData('{{ route('accounts.destroy',['account'=>$item->id]) }}')">
              Delete</button>
            @endif
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>