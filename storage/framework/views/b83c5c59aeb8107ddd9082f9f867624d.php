<!--nav&tabs-->
<div class="container-nav mt-4">
    <ul class="nav">
        <?php echo $__env->make('includes.nav-tabs.project-information', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.nav-tabs.planning', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.nav-tabs.mop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.nav-tabs.actual', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('includes.nav-tabs.cost', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        
    </ul>
</div>
<!--end-nav&tabs-->
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs.blade.php ENDPATH**/ ?>