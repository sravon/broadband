<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    <x-table 
      :th="['Title','MB','Price(Tk/month)','Items']" 
    >
    @foreach ($packages as $item)
      <tr>
        <th scope="row">{{ $loop->iteration }}</th>
        <td >{{ $item->title }}</td>
        <td >{{ $item->mb }}</td>
        <td >{{ $item->tk }}</td>
        <td >{{ $item->description }}</td>
        <td>
          <x-modal 
            type="editmodal" 
            route="package.update,package=>{{ $item->id }}" 
            title="Edit Data" id="{{ $item->id }}" /> ||
            <button class="btn btn-danger" onclick="deleteData('{{ route('package.destroy',['id'=>$item->id]) }}')">
            Delete</button>
        </td>
      </tr>   
    @endforeach
    </x-table>
</div>