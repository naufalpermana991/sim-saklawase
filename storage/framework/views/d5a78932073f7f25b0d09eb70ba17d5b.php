

<?php $__env->startSection('content'); ?>
    <!--section1-->

    <?php echo $__env->make('includes.section1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--end-section1-->

    <!--nav-tabs-->
    <?php echo $__env->make('includes.nav-tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--end-nav-tabs-->

    <hr>

    <!--section2-->
    <div class="container">
        <div class="mt-5">
            <div class="title-section-1 d-flex justify-content-between">
                <h5 class="align-self-center">Man of Power</h5>
                <div class="right-div">
                    <a href="<?php echo e(route('mop.create', $project->id)); ?>" class="btn btn-outline-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt="" class="btn-icon me-3" />Add
                        Man Of Power
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--end-section2-->

    <!--table-section-->
    <div class="container mt-5">
        <table class="table" id='empTable'>
            <thead>
                <tr>
                    <th class="align-middle p-3" scope="col">Task</th>
                    <th class="text-center align-middle p-3" scope="col">
                        Date Started
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Person(s)
                    </th>
                    <th class="text-end align-middle p-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $mop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="p-3 align-middle" scope="row"><?php echo e($data->task_name); ?></td>
                        <td class="text-center align-middle p-3"><?php echo e($data->start_date); ?></td>
                        <td class="text-center align-middle p-3">
                            <img src="<?php echo e(asset('frontend/images/users.png')); ?>" alt="" class="me-3"
                                style="max-height: 24px" />
                            <a href="#" class="action align-middle text-decoration-none viewdetails ms-2"
                                data-id="<?php echo e($data->id); ?>">View Details</a>
                        </td>
                        <td class="text-end
                                p-3 align-middle">
                            <div class="action d-flex justify-content-end">
                                <form onsubmit="return confirm('Are you sure to delete the data?');"
                                    action="<?php echo e(route('mop.destroy', $data->id)); ?>" method="POST">
                                    <div class="action d-flex justify-content-end">
                                        <a class="btn btn-primary" href="<?php echo e(route('mop.edit', $data->id)); ?>">Edit</a>
                                        <div class="me-3"></div>
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger">Delete</a>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="4"class="text-center p-3 block align-middle">Data Kosong</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!--end-table-section-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('includes.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/man-of-power/index.blade.php ENDPATH**/ ?>