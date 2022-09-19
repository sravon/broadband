<!DOCTYPE html>
<html lang="en">
@include('admin.layout_partials._head')

<body class="">
    <div class="wrapper">
        @include('admin.layout_partials._sidebar')
        <div id="content" class="activecontent">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div style="float: left">
                        <div class="dropdown" style="position: relative;">
                            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="{{
                                asset(Auth::user()->image ? Auth::user()->image : 'assets/logo/profile.png') 
                              }}" class="rounded-pill" alt="img" style="width: 50px;height: 50px;">
                            </button>
                            <ul class="dropdown-menu" style="position: absolute;left: -90px">
                              <li class="border-bottom border-secondary"><a class="dropdown-item" href="#">Action</a></li>
                              <li class="border-bottom border-secondary"><a class="dropdown-item" href="{{ route('admin.profile')}}">Profile</a></li>
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
