<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <h1>Первая страница</h1>
    <p>a = {{ $a }}</p>
    <p>b = {{ $b }}</p>
    @if ($a % 2 == 0)
        <p>a делится на 2</p>
    @else
        <p>a не делится на 2</p>
    @endif
</body>
</html>