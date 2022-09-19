<div class="col-md-8">
    @if ( Session::get('fail'))
      <x-alert type="error" message="In edit form, {{ Session::get('fail') }}"/>
    @endif
    @if (Session::get('successed'))
      <x-alert type="success" message="{{ Session::get('successed') }}"/>
    @endif
    {{-- table component --}}
    <x-table 
      :th="['Name', 'Icon', 'Link']" 
    >
      @foreach ($socialmedia as $item)
        <tr>
          <th scope="row">{{ $loop->iteration }}</th>
          <td>{{ $item->name }}</td>
          <td><div class="p-2"><i class="fa fa-{{ $item->icon }}" style="font-size: 31px"></i></div></td>
          <td>{{ $item->link }}</td>
          <td>
            <x-modal 
              type="editmodal" 
              route="social_media.update,social_media=>{{ $item->id }}"
              title="Edit Data" id="{{ $item->id }}" /> ||
              <button class="btn btn-danger" 
                onclick="deleteData('{{ route('social_media.destroy',['social_media'=>$item->id]) }}')">
              Delete</button>
          </td>
        </tr>   
      @endforeach
    </x-table>
</div>