<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
</head>
<body>
    <header>
        <h1>@yield('title','Milan Belal')</h1>
       @include('components.header')
    </header>

    <main>
        <!-- Dynamic content will be injected here -->
        @yield('content')

        
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My Laravel App</p>
    </footer>


    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
</body>
</html>
