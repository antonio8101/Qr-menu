<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="To be refined"/>
{{--    <link rel="manifest" href="/manifest.json"/>--}}
    <title>PrivateArea - {{ config('app.name', 'Laravel') }}</title>
{{--    <script defer="defer" src="/static/js/main.d753011c.js"></script>--}}
{{--    <link href="/static/css/main.e6c13ad2.css" rel="stylesheet">--}}

    <!-- Scripts -->
    @vite(['public/build-privatearea/static/css/main.css', 'public/build-privatearea/static/js/main.js'])
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root"></div>
</body>
</html>
