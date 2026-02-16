<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массив</title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="bg-sky-200 p-6">
    <div class="mb-6 space-x-4">
        <a href="<?php echo e(route('array.shuffle')); ?>" class="text-xl font-bold">Перемешать массив</a>

        <a href="<?php echo e(route('array.sort')); ?>" class="text-xl font-bold">Сортировать массив</a>

        <a href="<?php echo e(route('array.filter')); ?>" class="text-xl font-bold">Отфильтровать массив</a>
    </div>
    <div class="grid grid-cols-4 gap-6">
        <?php $__currentLoopData = $array; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="bg-white p-4 rounded">
                <img src="<?php echo e(Vite::asset('resources/images/'.$item['path'])); ?>" alt="<?php echo e($item['title']); ?>" class="w-40 h-40">
                <h3 class="text-lg font-semibold"><?php echo e($item['title']); ?></h3>
                <p class="mt-2"><?php echo e($item['price']); ?> СЭ</p>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html><?php /**PATH D:\xampp\htdocs\newProject\resources\views/array.blade.php ENDPATH**/ ?>