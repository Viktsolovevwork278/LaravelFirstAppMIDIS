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
        <h2 class="filter">Выводить продукты по категории</h2>
        @foreach($categories as $category)
            <h3>{{ $category->title }}</h3>
            @foreach($category->products as $product)
            <h4>{{ $product->title }}</h4>
            <p>Цена: {{ $product->price }}</p>
            @endforeach
        @endforeach
        <div class="cards">
            @foreach($products as $product)
                <div class="products-list">
                    <h3 class="product-title">{{ $product->title }}</h3>
                    <p class="product-description">{{ $product->description }}</p>
                    <p class="product-price">Цена: {{ $product->price }}</p>
                    <p class="product-category">Категория: {{ $product->category?->title ?? 'No category' }}</p>
                    <div>Дата заказа:
                        @foreach($product->orders as $order)
                        {{ $order->date }} кол-во: {{ $order->pivot->count }}
                        @endforeach
                    </div>
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
        <h2> Заказы</h2>
        @foreach($orders as $order)
             <p>Дата: {{ $order->date }}</p>
             <p>Статус: {{ $order->status }}</p>
             <p>Сумма: {{ $order->products->sum('price') }}</p>
             @foreach($order->products as $product)
             <p>Название: {{ $product->title }}</p>
             <p>Цена: {{ $product->price }}</p>
            @endforeach
        @endforeach
        </div>
        <a class="add-button" href="{{ route('products.create') }}">Добавить продукт</a>
    </div>
</body>
</html>
