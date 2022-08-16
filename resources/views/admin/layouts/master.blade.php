<!DOCTYPE html>
<html lang="en">
@include('admin.layout_partials._head')

<body class="">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <img src="sikkim.jpg" width="100" class="rounded-circle mx-auto d-block img-fluid">
                <h5><b class="text-warning">Abdur Rahman Kazi</b></h5>
            </div>
            <ul class="lisst-unstyled components">
                <p>The providers</p>
                <li class="active">
                    <a href="#homesubmenu" data-toggle="collapse">home</a>
                </li>
                <li >
                    <a href="#pdfmenu" data-toggle="collapse" arial-expanded="false" class="dropdown-toggle"><i class="fa fa-align-left"></i>Question</a>
                    <ul class="collapse lisst-unstyled" id="pdfmenu">
                        <li>
                            <a href="#"><i class="fa fa-align-left"></i>View All question</a>
                        </li>
                        <li>
                            <a href="#">Add Question</a>
                        </li>
                    </ul>
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
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <img src="ddd" alt="img">
                            </button>
                            <ul class="dropdown-menu" style="position: absolute;left: -90px">
                              <li><a class="dropdown-item" href="#">Action</a></li>
                              <li><a class="dropdown-item" href="#">Another action</a></li>
                              <li><a class="dropdown-item" href="#">Something else here</a></li>
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
