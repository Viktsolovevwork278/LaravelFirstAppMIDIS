<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product | Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="create-title">Создать продукт</h1>
        <form class="create-form" action="{{route('products.store')}}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Название продукта">
            <textarea name="description" placeholder="Описание продукта"></textarea>
            <input type="number" name="price" placeholder="Цена">
            <button type="submit">Добавить продукт</button>
        </form>
    </div>
</body>
</html>