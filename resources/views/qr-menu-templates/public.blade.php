@php use Illuminate\Support\Facades\Vite; @endphp

    <!DOCTYPE html>
<html lang="en">
<head>
    <title>
        Qr-Menù
    </title>
    @vite(['resources/js/app.js'])
    <meta name="viewport" content="width=device-width">
</head>
<body>
<x-public-components.main-layout/>
</body>
</html>
