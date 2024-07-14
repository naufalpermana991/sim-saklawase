<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Edit Man of Power Task</title>
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <?php echo $__env->make('includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
</head>

<body>
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--section1-->
    <div class="container mb-3">
        <form action="<?php echo e(route('mop.update', $manOfPower->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Edit Man of Power</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt=""
                            class="btn-icon me-3" />Save
                        Man of Power
                    </button>
                </div>
            </div>
            <!--general-task-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="planning_id" class="form-label">Task Name</label>
                                    <select id="planning-dropdown" name="planning_id" class="form-select">
                                        <option value="">-- Select Task --</option>
                                        <?php $__currentLoopData = $plannings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>"
                                                <?php echo e($item->id == $manOfPower->planning_id ? 'selected' : ''); ?>>
                                                <?php echo e($item->task_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <!-- Date -->
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Date</label>
                                    <select id="date-dropdown" name="start_date" class="form-select">
                                        <option value="">-- Select Started Date --</option>
                                        <?php $__currentLoopData = $plannings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->start_date); ?>"
                                                <?php echo e($item->start_date == $manOfPower->start_date ? 'selected' : ''); ?>>
                                                <?php echo e($item->start_date); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <!-- Worker Name and Responsibility -->
                        <?php for($i = 1; $i <= 4; $i++): ?>
                            <div class="row">
                                <div class="col my-2">
                                    <div class="form-group worker-group" data-worker="<?php echo e($i); ?>">
                                        <label for="worker_name<?php echo e($i); ?>" class="form-label">Worker
                                            <?php echo e($i); ?></label>
                                        <input type="text" class="form-control"
                                            name="worker_name<?php echo e($i); ?>"
                                            placeholder="Enter Worker <?php echo e($i); ?> name"
                                            value="<?php echo e($manOfPower->{'worker_name' . $i}); ?>" />
                                    </div>
                                </div>
                                <div class="col my-2">
                                    <div class="form-group worker-group" data-responsibility="<?php echo e($i); ?>">
                                        <label for="worker_responsibility<?php echo e($i); ?>"
                                            class="form-label">Responsibility</label>
                                        <input type="text" class="form-control"
                                            name="worker_responsibility<?php echo e($i); ?>"
                                            placeholder="Enter Worker <?php echo e($i); ?> responsibility"
                                            value="<?php echo e($manOfPower->{'worker_responsibility' . $i}); ?>" />
                                    </div>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
            <!--end-of-general-task-->
        </form>
    </div>
    <!--end-of-section1-->
    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>


</html>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/man-of-power/edit.blade.php ENDPATH**/ ?>