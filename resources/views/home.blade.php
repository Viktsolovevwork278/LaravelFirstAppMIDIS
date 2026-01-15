<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="home-body">
    <wrapper>
        <header class="header">
            <h3 class="logo">Laravel</h1>
            <ul class="nav-list">
                <li><a href="https://laravel.com/docs">Главная</a></li>
                <li><a href="https://laracasts.com">Массивы</a></li>
            </ul>
        </header>
        <main class="main">
            <p class="main-text">Laravel is a free and open-source PHP-based web framework for building web applications. It was created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel include modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.</p>
            <img src="{{ Vite::asset('resources/images/winter.jpg') }}" alt="winter">
        </main> 
        <cards class="cards">
            @foreach ($array as $item)
                <div class="card">
                    <h3 class="card-title">{{ $item['title'] }}</h3>
                    <p class="card-price">{{ $item['price'] }}</p>
                    {{-- <p class="card-path">{{ $item['path'] }}</p> --}}
                    <img class="card-img" src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="card-img">
                </div>
            @endforeach
        </cards>
    </wrapper>
    <footer class="footer">
        <p>© Laravel 2026</p>
        <p>Соловьев Виктор</p>
    </footer>
</body>
</html>