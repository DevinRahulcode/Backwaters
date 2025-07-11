<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title') - Black Water
    </title>
    <meta name="description" content="Login">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <!-- Call App Mode on ios devices -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- base css -->
    <link rel="stylesheet" media="screen, print" href="{{ url('back/css/vendors.bundle.css') }}">
    <link rel="stylesheet" media="screen, print" href="{{ url('back/css/app.bundle.css') }}">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('back/img/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('back/img/favicon/favicon-32x32.png') }}">
    <link rel="mask-icon" href="{{ url('back/img/favicon/safari-pinned-tab.svg') }}" color="#5bbad5">
    <link id="mytheme" rel="stylesheet" media="screen, print" href="{{ url('back/css/themes/cust-theme-4.css')}}">
    @yield('headerStyle')
</head>

<body style="background:url(/back/img/bg.jpg); background-size:cover;">
    @yield('content')
    <!-- color-profile -->
    @include('layouts/partials/color-profile')
    <script src="{{ url('back/js/vendors.bundle.js') }}"></script>
    <script src="{{ url('back/js/app.bundle.js') }}"></script>
    @yield('footerScript')
</body>

</html>
