

<?php $__env->startSection('content'); ?>
    <!--section1-->

    <?php echo $__env->make('includes.section1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--end-section1-->

    <!--nav-tabs-->
    <?php echo $__env->make('includes.nav-tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end-nav-tabs-->

    <hr>

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Planning</h5>
                <div class="right-div">
                    <a href="<?php echo e(route('planning.create', $project->slug)); ?>" class="btn btn-outline-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt="" class="btn-icon me-3" />Add
                        Planning
                    </a>
                    <a href="<?php echo e(route('detailplanning.index', $project->slug)); ?>" class="tertiary-link ps-4">
                        See Schedule Details
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end-section2-->

    <!--table-section-->
    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th class="p-4" scope="col">Task</th>
                    <th class="text-center p-4" scope="col">Volume</th>
                    <th class="text-center p-4" scope="col">Unit</th>
                    <th class="text-center p-4" scope="col">Date Started</th>
                    <th class="text-center p-4" scope="col">Date Finished</th>
                    <th class="text-center p-4" scope="col">Duration</th>
                    <th class="text-center p-4" scope="col">Man Power Planning</th>
                    <th class="text-center p-4" scope="col">Percentage (%)</th>
                    <th class="text-end p-4" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $planning; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="p-3 align-middle" scope="row"><?php echo e($data->task_name); ?></td>
                        <td class="p-3 text-center align-middle" scope="row"><?php echo e($data->volume); ?></td>
                        <td class="p-3 text-center align-middle" scope="row"><?php echo e($data->unit); ?></td>
                        <td class="text-center p-3 align-middle"><?php echo e($data->start_date); ?></td>
                        <td class="text-center p-3 align-middle"><?php echo e($data->end_date); ?></td>
                        <td class="text-center p-3 align-middle"><?php echo e($data->duration); ?></td>
                        <td class="text-center p-3 align-middle">
                            <img src="<?php echo e(asset('frontend/images/users.png')); ?>" alt="" class="me-3"
                                style="max-height: 24px" /><?php echo e($data->mop); ?>

                        </td>
                        <td class="text-center p-3 align-middle"><?php echo e($data->percentage); ?>%</td>
                        <td class="text-end p-3 align-middle">
                            <form onsubmit="return confirm('Are you sure to delete the data?');"
                                action="<?php echo e(route('planning.destroy', ['project' => $project->slug, 'planning' => $data->id])); ?>"
                                method="POST">
                                <div class="action d-flex justify-content-end">
                                    <a class="btn btn-primary"
                                        href="<?php echo e(route('planning.edit', ['project' => $project->slug, 'planning' => $data->id])); ?>">Edit</a>
                                    <div class="me-3"></div>
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="9"class="text-center p-3 block align-middle">Data Kosong</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/planning/index.blade.php ENDPATH**/ ?>