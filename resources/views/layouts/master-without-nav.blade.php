<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CMS')</title>
    <link rel="shortcut icon" type="image/png" href="{{ URL::asset('assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/styles.css') }}" />
</head>

<body>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @yield('content')
    </div>
    <script src="{{ URL::asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
