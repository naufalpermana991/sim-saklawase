<li class="nav-item me-5">
    <?php
        $projectLink = url('/actuals/' . $project->slug);
        $isActive = request()->is('actuals/' . $project->slug);
    ?>

    <?php if($isActive): ?>
        <span class="nav-link tabs-active">Actual</span>
    <?php else: ?>
        <a class="nav-link nav-tabs" data-toggle="tab" href="<?php echo e($projectLink); ?>">Actual</a>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs/actual.blade.php ENDPATH**/ ?>