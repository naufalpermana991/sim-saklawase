<?php
    $projectLink = url('/planning/' . $project->slug);
    $isActive = request()->is('planning/*');
?>
<li class="nav-item me-5">
    <?php if($isActive): ?>
        <span class="nav-link tabs-active">Planning</span>
    <?php else: ?>
        <a class="nav-link nav-tabs" data-toggle="tab" href="<?php echo e($projectLink); ?>">Planning</a>
    <?php endif; ?>
</li>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/nav-tabs/planning.blade.php ENDPATH**/ ?>