<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $description }}</p> --}}
    {{-- @foreach ( $data as $item )
        <p>
            {{ $item }}
        </p>
    @endforeach --}}
    <p>{{ $products }}</p>
    {{-- Navigate to about --}}
    <a href={{ route('about') }}>Go to about</a>
</body>
</html>