<div class="row border shadow-sm m-1 p-2">
    <div class="col-md-3">
        <div class="text-danger ps-4 pt-4" style="font-size:60px"><i class="fa fa-connectdevelop" aria-hidden="true"></i></div>
    </div>
    <div class="col-md-9 text-left">
        <h3 class="">{{ $title }}</h3>
        <hr>
        @php
            $arr = explode("||",$array);
        @endphp
        @foreach ($arr as $item)
            <p class="ps-2"><span class="text-danger me-2"><i class="fa fa-check" aria-hidden="true"></i></span>{{$item}}</p>
        @endforeach
    </div>
</div>