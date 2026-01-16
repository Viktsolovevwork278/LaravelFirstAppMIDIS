<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products | Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <h1 class="cards-title">Список продуктов</h1>
        <div class="cards">
            @foreach($products as $product)
                <div class="products-list">
                    <h3 class="product-title">{{ $product->title }}</h3>
                    <p class="product-description">{{ $product->description }}</p>
                    <p class="product-price">Цена: {{ $product->price }}</p>
                    <div class="control-product">
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="destroy-button" type="submit">Удалить</button>
                        </form>
                        <a class="product-link" href="{{ route('products.show', $product->id) }}">Подробнее</a>
                    </div>
                </div>
            @endforeach 
        </div>
        <a class="add-button" href="{{ route('products.create') }}">Добавить продукт</a>
    </div>
</body>
</html>