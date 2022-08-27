<!DOCTYPE html>
<html lang="en">
@include('admin.layout_partials._head')

<body class="">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="{{ asset('assets/logo/bro.jpg') }}" width="100" class="rounded-circle mx-auto d-block img-fluid">
                <h5><b class="text-warning">Abdur Rahman Kazi</b></h5>
            </div>
            <ul class="lisst-unstyled components">
                <p>The providers</p>
                <li class="active">
                    <a href="{{ route('admin.dashboard') }}" data-toggle="collapse">Home</a>
                </li>
                <li >
                    <a href="{{ route('admin.package') }}"><i class="fa fa-align-left"></i>Package</a>
                </li>
                <li >
                    <a href="{{ route('admin.coverage') }}"><i class="fa fa-align-left"></i>Coverage</a>
                </li>
                <li >
                    <a href="{{ route('district.index') }}"><i class="fa fa-align-left"></i>District</a>
                </li>
                <li >
                    <a href="{{ route('bank.index') }}"><i class="fa fa-align-left"></i>Bank</a>
                </li>
                <li >
                    <a href="{{ route('accounts.index') }}"><i class="fa fa-align-left"></i>Account</a>
                </li>
                <li >
                    <a href="{{ route('pays.index') }}"><i class="fa fa-align-left"></i>Payment Info</a>
                </li>
                <li >
                    <a href="{{ route('users.index') }}"><i class="fa fa-align-left"></i>User List</a>
                </li>
                <li >
                    <a href="{{ route('contacts.index') }}"><i class="fa fa-align-left"></i>Contacts</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-align-left"></i>About</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-align-left"></i>About</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-align-left"></i>About</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-align-left"></i>About</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-align-left"></i>About</a>
                </li>
                <li>
                    <a href="#">test</a>
                </li>
                <li >
                    <a href="#pageSubmenu" data-toggle="collapse" arial-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse lisst-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </nav>
        <div id="content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-align-left"></i>
                        <span>||</span>
                    </button>
                    <div style="float: left">
                        <div class="dropdown" style="position: relative;">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{ asset('assets/logo/bro.jpg') }}" width="80" class="rounded-pill" alt="img">
                            </button>
                            <ul class="dropdown-menu" style="position: absolute;left: -90px">
                              <li class="border-bottom border-secondary"><a class="dropdown-item" href="#">Action</a></li>
                              <li class="border-bottom border-secondary"><a class="dropdown-item" href="#">Another action</a></li>
                              <li ><a class="dropdown-item" href="{{ route('admin.logout') }}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="container-fluid container">
                @yield('main_content')
            </div><!-- container -->
        </div>
    </div>
    <!-- ========== Left Sidebar Start ========== -->
    {{-- @include('admin.layout_partials._sidebar') --}}
    <!-- Left Sidebar End -->
    

    {{-- @include('backend.admin.layout_partials._footer') --}}

@include('admin.layout_partials._scripts')
@yield('scripts')
</body>
</html>
