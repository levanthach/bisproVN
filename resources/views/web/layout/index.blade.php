<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Newnet">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <base href="{{asset('')}}">
    <link href="web/img/favicon.png" rel="icon">
    <link href="web/img/apple-touch-icon.png" rel="apple-touch-icon">

    @yield('meta')

    @include('web.layout.style')

    @yield('style')
</head>
<body class="@yield('body-class')">

    @include('web.layout.header')

    @yield('content')

    @include('web.layout.footer')

    @include('web.layout.script')

    @yield('scripts')
</body>
</html>
