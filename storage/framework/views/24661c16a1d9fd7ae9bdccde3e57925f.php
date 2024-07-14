<!--section1-->
<div class="container mb-3">
    <div class="mt-5">
        <div class="title-section-1 d-flex justify-content-between align-items-center">
            <h3>Project <?php echo e($project->initial_project); ?></h3>
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle px-4 py-2" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Project Settings
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo e(route('projects.edit', $project->id)); ?>">Edit Project</a></li>
                    <li><a class="dropdown-item" href="#">Delete Project</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--section1-->
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/includes/section1.blade.php ENDPATH**/ ?>