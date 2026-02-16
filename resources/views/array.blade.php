<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массив</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-sky-200 p-6">
    <div class="mb-6 space-x-4">
        <a href="{{ route('array.shuffle') }}" class="text-xl font-bold">Перемешать массив</a>

        <a href="{{ route('array.sort') }}" class="text-xl font-bold">Сортировать массив</a>

        <a href="{{ route('array.filter') }}" class="text-xl font-bold">Отфильтровать массив</a>
    </div>
    <div class="grid grid-cols-4 gap-6">
        @foreach ($array as $item)
            <div class="bg-white p-4 rounded">
                <img src="{{ Vite::asset('resources/images/'.$item['path']) }}" alt="{{ $item['title'] }}" class="w-40 h-40">
                <h3 class="text-lg font-semibold">{{ $item['title'] }}</h3>
                <p class="mt-2">{{ $item['price'] }} СЭ</p>
            </div>
        @endforeach
    </div>
</body>
</html>