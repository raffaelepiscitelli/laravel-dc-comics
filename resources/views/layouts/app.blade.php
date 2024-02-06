<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Comics</title>
    @vite('resources/js/app.js')
</head>

<body>

    @include('partials.header')

    @include('partials.jumbo-section')

    <main>

        @yield('main-content')

    </main>

    @include('partials.footer')

</body>

</html>