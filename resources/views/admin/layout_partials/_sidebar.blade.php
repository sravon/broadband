<nav id="sidebar">
  <div class="sidebar-header">
      <img src="{{
            asset(Auth::user()->image ? Auth::user()->image : 'assets/logo/profile.png') 
          }}" class="rounded-circle mx-auto d-block img-fluid" style="width: 100px;height: 100px;">
      <h5 class="text-center"><b class="text-warning">{{ Auth::user()->name }}</b></h5>
  </div>
  <ul class="lisst-unstyled components">
      <p>Role : {{ Auth::user()->role }}</p>
      <li class="{{ (request()->is('admin/dashboard')) ? 'active' : '' }}">
          <a href="{{ route('admin.dashboard') }}" data-toggle="collapse"><i class="fa fa-home"></i>Home</a>
      </li>
      <li class="{{ (request()->is('admin/package')) ? 'active' : '' }}">
          <a href="{{ route('admin.package') }}"><i class="fa fa-ticket"></i>Package</a>
      </li>
      <li class="{{ (request()->is('admin/coverage')) ? 'active' : '' }}">
          <a href="{{ route('admin.coverage') }}"><i class="fa fa-map"></i>Coverage</a>
      </li>
      <li class="{{ (request()->is('admin/district')) ? 'active' : '' }}">
          <a href="{{ route('district.index') }}"><i class="fa fa-diamond"></i>District</a>
      </li>
      <li class="{{ (request()->is('admin/bank')) ? 'active' : '' }}">
          <a href="{{ route('bank.index') }}"><i class="fa fa-university"></i>Bank</a>
      </li>
      <li class="{{ (request()->is('admin/accounts')) ? 'active' : '' }}">
          <a href="{{ route('accounts.index') }}"><i class="fa fa-male"></i>Account</a>
      </li>
      <li class="{{ (request()->is('admin/pays')) ? 'active' : '' }}">
          <a href="{{ route('pays.index') }}"><i class="fa fa-money"></i>Payment Info</a>
      </li>
      <li class="{{ (request()->is('admin/users')) ? 'active' : '' }}">
          <a href="{{ route('users.index') }}"><i class="fa fa-user"></i>User List</a>
      </li>
      <li class="{{ (request()->is('admin/contacts')) ? 'active' : '' }}">
          <a href="{{ route('contacts.index') }}"><i class="fa fa-contao"></i>Contacts</a>
      </li>
      <li>
          <a href="#"><i class="fa fa-address-book-o"></i>About</a>
      </li>
  </ul>
</nav>