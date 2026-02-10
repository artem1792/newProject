<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вторая страница</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h2>Вторая страница</h2>
    <p>Первое число: {{ $a }}</p>
    <p>Второе число: {{ $b }}</p>
    <p>Сумма: {{ $a + $b }}</p>

    <div class="container mx-auto">
        @for ($i = 0; $i < count($products); $i++)
            <p class="border-b-2">
                {{ $products[$i] }}
            </p>
        @endfor

        @foreach ($products as $product)
            <p class="border-t-2">
                {{ $product }}
            </p>
        @endforeach
    </div>
</body>
</html>