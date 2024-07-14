

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('includes.section1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--end-section1-->

    <!--nav-tabs-->
    <?php echo $__env->make('includes.nav-tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end-nav-tabs-->

    <hr>


    <!--section1-->
    <div class="container">

    </div>
    <!--end-section1-->

    <!--section2-->

    <div class="container mb-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Project Name</p>
                    <h5><?php echo e($project->project_name); ?></h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Work Order Number</p>
                    <h5><?php echo e($project->wo_number); ?></h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Cost Center</p>
                    <h5><?php echo e($project->cost_center); ?></h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Location</p>
                    <h5><?php echo e($project->location); ?></h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Project Value</p>
                    <h5><?php echo e($project->project_value); ?></h5>
                </div>
            </div>
            <div class="col-auto">
                <div class="project-details mt-4">
                    <p>Customer Name</p>
                    <h5><?php echo e($project->customer); ?></h5>
                </div>
            </div>
        </div>
    </div>
    <!--endsection2-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/projects/detail.blade.php ENDPATH**/ ?>