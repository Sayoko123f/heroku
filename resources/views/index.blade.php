<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testing</title>
</head>

<body>
    <ul>
        <li><a href="{{route('test.index')}}">test</a></li>
        {{-- <li><a href="{{route('image')}}">ImageController</a></li> --}}
    </ul>
</body>

</html>