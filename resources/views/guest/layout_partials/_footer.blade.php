<footer class="footer text-center text-light container-fluid bg-dark">
  
    <div class="row">
      <div class="col-md-4">
        <h3 class="w-50 mx-auto text-light border border-top-0 border-start-0 border-end-0 border-danger border-3 p-2">Company</h3>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.pay') }}">Bill Pay</a></p>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.coverage') }}">Coverage</a></p>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.about') }}">About</a></p>
      </div>
      <div class="col-md-4">
        <h3 class="w-50 mx-auto text-light border border-top-0 border-start-0 border-end-0 border-danger border-3 p-2">Useful Links</h3>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.package') }}">Home Internet</a></p>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.corporateinternet') }}">Corporate Internet</a></p>
        <p class="h6"><a class="nav-link text-muted" href="{{ route('guest.ipphones') }}">Ip Phone</a></p>
      </div>
      <div class="col-md-4">
        <h4 class="w-50 mx-auto text-light border border-top-0 border-start-0 border-end-0 border-danger border-3 p-2">Contact</h4>
        @foreach ($commondata->contacts as $item)
          @php
            $des_array = explode("||",$item->description);
          @endphp
          @foreach ($des_array as $element)
            <p class="text-muted">{{ $element }}</p>
          @endforeach
        @endforeach
        <div >
          <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
          <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
          <button class="btn top_btn"><i class="fa fa-trash"></i></button>
          <button class="btn top_btn"><i class="fa fa-close"></i></button>
          <button class="btn top_btn"><i class="fa fa-folder"></i></button>
        </div>
      </div>
    </div>
    <hr>
    <h5 class="text-center text-light pb-3">Copyright ©2020 All rights reserved | Web Design And Devlopment is made by <span class="text-danger">Shrabon</span></h5>
</footer>