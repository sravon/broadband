<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    <x-table 
      :th="['Name','Icon','Items']" 
    >
    @foreach ($corporateinternets as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td >{{ $item->name }}</td>
        <td >{{ $item->icon_name }}</td>
        <td >{{ $item->items }}</td>
        <td>
          <x-modal 
            type="editmodal" 
            route="corporateinternet.update,corporateinternet=>{{ $item->id }}" 
            title="Edit Data" id="{{ $item->id }}" /> ||
            <button class="btn btn-danger" onclick="deleteData('{{ route('corporateinternet.destroy',['corporateinternet'=>$item->id]) }}')">
            Delete</button>
        </td>
      </tr>   
    @endforeach
    </x-table>
</div>