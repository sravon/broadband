
@foreach ($districts as $item)
<div class="row pt-2">
    <h3 class="text-center">{{ $item->district }}</h3>
    @foreach ($coverages as $element)
        {!! $element->district_id == $item->district_id ?
         '<div class="col-md-3">
        <div class="p-2 border">
            <h3 class="">Navana Office</h3>
            <hr>
            <p class=""><span class="text-danger me-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>Navana Tower (7th floor),45, Gulshan South C/A-1</p>
            <p class=""><span class="text-danger me-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>Dhaka-1212</p>
            <p class=""><span class="text-danger me-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>Phone:01961133777</p>
            </div>
        </div>'  : null
        !!}
    @endforeach
    
</div>
@endforeach
