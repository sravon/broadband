<!DOCTYPE html>
<html lang="en">
@include('guest.layout_partials._head')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<body class="">
    <!-- ========== Left Sidebar Start ========== -->
    @include('guest.layout_partials._header')
    <!-- Left Sidebar End -->
    @yield('main_content')

    @include('guest.layout_partials._footer')

@include('guest.layout_partials._scripts')
@yield('scripts')
</body>
</html>
