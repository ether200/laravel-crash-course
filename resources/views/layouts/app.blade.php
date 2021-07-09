<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
    @yield('content')
</body>
</html>

{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Personal Website - Code With Dary
    </title>
    <link 
        rel="stylesheet" 
        href="style.css"
    />
    <link 
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap" 
        rel="stylesheet"
    />
    <link 
        rel="stylesheet" 
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
    <link rel="stylesheet" href="{{  asset('css/app.css') }}">
</head>

<body>
    <header>
        {{-- Notice how there's no section added in header.blade.php that's because is not parent/children --}}
        {{-- @include('layouts.header') --}}
    {{-- </header> --}}

    {{-- This is how you use children components --}}
    {{-- @yield('content'); --}}

    <!-- Footer -->
    {{-- <footer>
        @include('layouts.footer')
    </footer>
</body>
</html> --}}

