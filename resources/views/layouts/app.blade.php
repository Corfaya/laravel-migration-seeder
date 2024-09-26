<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="http://www.yoursite.com/favicon.ico?v=<?php echo time() ?>" />
    <title>Migration Seeder</title>
    @vite('resources/js/app.js')
</head>
<body>
    @include('partials.header')
    <main class="mt-5">
        @yield('cont')
    </main>
    @include('partials.footer')
</body>
</html>