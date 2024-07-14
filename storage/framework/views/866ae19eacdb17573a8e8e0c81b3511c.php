<li class="nav-item me-5">
    <?php
        $projectLink = url('/mop/' . $project->slug);
        $isActive = request()->is('mop/' . $project->slug);
    ?>

    <?php if($isActive): ?>
        <span class="nav-link tabs-active">Man of Power</span>
    <?php else: ?>
        <a class="nav-link nav-tabs" data-toggle="tab" href="<?php echo e($projectLink); ?>">Man of Power</a>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs/mop.blade.php ENDPATH**/ ?>