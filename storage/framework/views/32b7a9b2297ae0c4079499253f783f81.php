<li class="nav-item me-5">
    <?php
        $projectLink = url('/projects/' . $project->slug);
        $isActive = request()->is('projects/' . $project->slug);
    ?>

    <?php if($isActive): ?>
        <span class="nav-link tabs-active">Project Information</span>
    <?php else: ?>
        <a class="nav-link nav-tabs" data-toggle="tab" href="<?php echo e($projectLink); ?>">Project Information</a>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs/project-information.blade.php ENDPATH**/ ?>