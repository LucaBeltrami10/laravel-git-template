<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title', 'title') </title>

    @vite('resources/js/app.js')
</head>

<body>
    <header>
        @include('partials.header')
    </header>   

    <main>
        @yield('main-section')
    </main>

    <footer>
        @include('partials.footer')
    </footer>
</body>

</html>