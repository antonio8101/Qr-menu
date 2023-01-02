<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Qr-Menù</title>
    @vite(['resources/js/app.js'])
</head>
<body>
<div class="page-wrapper">
    <x-public-components.header-component/>
    <x-public-components.section-intro/>
    <x-public-components.section-features/>
    <x-public-components.section-services/>
    <x-public-components.section-pricing/>
    <x-public-components.section-faq/>
    <x-public-components.section-customers/>
    <x-public-components.footer-component/>
</div>
</body>
</html>
