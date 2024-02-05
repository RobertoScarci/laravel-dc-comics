<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    @vite('resources/js/app.js')
    
</head>
<body>
    @include('layouts.partials.header')

        <main>
            @yield('main-content')
        </main>

    @include('layouts.partials.footer')
</body>
</html>