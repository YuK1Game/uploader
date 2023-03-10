<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/ts/app.tsx']); ?>
    </head>
    <body class="antialiased">
        <div id="app"></div>
    </body>
</html>
<?php /**PATH /home/kanayama_takayuki/projects/uploader/resources/views/index.blade.php ENDPATH**/ ?>