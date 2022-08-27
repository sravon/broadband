<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Bank', 'Ac No', 'Route No','Branch']" 
    >
      @foreach ($accounts as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->bank_id }}</td>
          <td>{{ $item->ac_no }}</td>
          <td>{{ $item->r_no }}</td>
          <td>{{ $item->branch }}</td>
          <td>
            <x-modal 
              type="editmodal" 
              route="accounts.update,account=>{{ $item->id }}"
              title="Edit Data" id="{{ $item->id }}" /> ||
              <button class="btn btn-danger" 
                onclick="deleteData('{{ route('accounts.destroy',['account'=>$item->id]) }}')">
              Delete</button>
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>