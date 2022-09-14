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
    @foreach ($ipphones as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td >{{ $item->name }}</td>
        <td >{{ $item->image }}</td>
        <td >{{ $item->items }}</td>
        <td data-image="{{ $item->image }}">
          <x-modal 
            type="editmodal" 
            route="iphones.update,iphone=>{{ $item->id }}" 
            title="Edit Data" id="{{ $item->id }}" /> ||
            <button class="btn btn-danger" onclick="deleteData('{{ route('iphones.destroy',['iphone'=>$item->id]) }}')">
            Delete</button>
        </td>
      </tr>   
    @endforeach
    </x-table>
</div>