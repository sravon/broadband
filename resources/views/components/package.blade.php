<div class="col-md-4">
    <div class="card text-center">
      <div class="card-header">
        <h4>{{ $title }}</h4>
        <h2 class="bg-warning p-2 b">{{ $mb }} Mbps</h2>
        <br>
        <h1><span class="text-danger">TK {{ $tk }} </span>/mo</h1>
      </div>
      <div class="card-body text-left">
        <h5 class="card-title">WHAT'S INCLUDED</h5>
        @php
            $des_array = explode("||",$des);
        @endphp
        @foreach ($des_array as $item)
            <p class="card-text"><span class="text-success h4"><i class="fa fa-check" aria-hidden="true"></i></span> 2 AM-8 PM - 20 Mbps.</p>
        @endforeach
        <p class="card-text"><span class="text-success h4"><i class="fa fa-check" aria-hidden="true"></i></span> 2 AM-8 PM - 20 Mbps.</p>
        <p class="card-text"><span class="text-success h4"><i class="fa fa-check" aria-hidden="true"></i></span> 2 4K Youtube and Facebook Stream.</p>
      </div>
      <div class="card-footer text-muted">
        <a href="#" class="btn btn-primary">Buy Now</a>
      </div>
    </div>
</div>