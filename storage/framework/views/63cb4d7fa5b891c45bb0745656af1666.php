<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Informasi Manajemen Proyek - PT. Saklawase Indonesia</title>

    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <?php echo $__env->make('includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
</head>

<body>
    <!--navbar-->
    <div>
        <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--end-navbar-->
        <!--section1-->
        <?php echo $__env->yieldContent('content'); ?>
        <!--end-section1-->
        <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</body>

</html>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/layouts/welcome.blade.php ENDPATH**/ ?>