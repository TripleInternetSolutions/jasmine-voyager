<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1, shrink-to-fit=no, width=device-width">

    <title>
        @yield('title')
        @if(View::hasSection('title'))|@endif
        {{ config('app.name', 'סטריפל פתרונות וחשיפה') }}
    </title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    @yield('meta_tags')

    <meta name="theme-color" content="#18365C">


    {{-- Scripts --}}
    <script src="{{ asset(mix('js/manifest.js', 'front')) }}" defer></script>
    <script src="{{ asset(mix('js/vendor.js', 'front')) }}" defer></script>
    <script src="{{ asset(mix('js/app.js', 'front')) }}" defer></script>

    <script type="text/javascript" charset="UTF-8" defer src="https://leader.triple.co.il/vc.min.js"></script>

    {{-- Fonts --}}
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800&display=swap&subset=hebrew"
          rel="stylesheet">

    {{-- Styles --}}
    <link href="{{ asset(mix('css/app.css', 'front')) }}" rel="stylesheet">
</head>
<body class="{{ Route::currentRouteName() }}">
@include('front.partials.nav-bar')
@yield('content')
@include('front.partials.footer')
@yield('script')
</body>
</html>
