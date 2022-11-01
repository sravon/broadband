<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Distirct', 'Post Code', 'Address','Phone']" 
    >
      @foreach ($coverages as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td>{{ $item->district_name }}</td>
          <td>{{ $item->postcode }}</td>
          <td>{{ $item->address }}</td>
          <td>{{ $item->phone }}</td>
          <td data-districtid="{{ $item->district_id }}">
            @if (Auth::user()->role === 'admin' || Auth::user()->role === 'editor')
              <x-modal 
              type="editmodal" 
              route="coverage.update" 
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