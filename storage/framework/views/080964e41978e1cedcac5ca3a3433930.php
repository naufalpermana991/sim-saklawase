<li class="nav-item me-5">
    <?php
        $projectLink = url('/cost/' . $project->slug);
        $isActive = request()->is('cost/' . $project->slug);
    ?>

    <?php if($isActive): ?>
        <span class="nav-link tabs-active">Cost</span>
    <?php else: ?>
        <a class="nav-link nav-tabs" data-toggle="tab" href="<?php echo e($projectLink); ?>">Cost</a>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs/cost.blade.php ENDPATH**/ ?>