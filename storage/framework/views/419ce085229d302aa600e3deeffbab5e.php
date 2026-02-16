<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>newProject</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="flex flex-col min-h-screen">
    <header class="bg-sky-200 p-4">
        <div class="flex justify-between items-center">
            <div class="text-xl font-bold">
                <p>newProject</p>
            </div>
            <nav>
                <ul class="flex gap-4">
                    <li>
                        <a href="<?php echo e(route('home')); ?>" class="text-xl font-bold">Главная</a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('array')); ?>" class="text-xl font-bold">Массивы</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex-grow p-6">
        <img src="https://www.onlygfx.com/wp-content/uploads/2018/02/crayon-cloud-drawing-cover.jpg" alt="" class="mb-4 size-52">
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam expedita iste sunt voluptatum hic tenetur in temporibus possimus sequi reiciendis, modi excepturi voluptates quae assumenda quod? Non impedit earum eum!</p>
    </main>
    <footer class="bg-gray-200 p-4 text-center">
        © Бобровский Артём, 2026г.
    </footer>
</body>
</html><?php /**PATH D:\xampp\htdocs\newProject\resources\views/home.blade.php ENDPATH**/ ?>