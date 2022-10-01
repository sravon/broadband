<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>{{ Request::segment(1) ? strtoupper(Request::segment(1)) : strtoupper('Home') }} - {{ $commondata->setting->name }}</title>
    <meta content="@lang('config.common_meta_description')" name="description" />
    <meta content="@lang('config.common_meta_author')" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="_token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $commondata->setting->description }}" />
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $commondata->setting->name }}">
    <meta property="og:description" content="{{ $commondata->setting->description }}">
    <meta property="og:url" content="{{ $commondata->setting->name }}">
    <meta property="og:site_name" content="{{ \Request::root() }}">
    <meta property="og:image" content="{{ asset($commondata->setting->logo) }}">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">


    <!--====== Favicon Icon ======-->
    <link rel="icon" href="{{ asset($commondata->setting->icon) }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- CSS only -->
    @yield('page_style_plugins')
    @yield('page_styles')
</head>
