<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0" />
    <title>Create Man of Power Task</title>
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <?php echo $__env->make('includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
</head>

<body>
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <hr>
    <!--section1-->
    <div class="container mb-3">
        <form action="<?php echo e(route('actuals.store')); ?>" method="post" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Add Actual Task</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt=""
                            class="btn-icon me-3" />Save
                        Actual Task
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
                                    <label for="planning_id" class="form-label">Days</label>
                                    <input type="number" class="form-control" name="days"
                                        placeholder="Enter Day Period">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Task Name</label>
                                    <select id="planning-dropdown" name="planning_id" class="form-select">
                                        <option value="">-- Select Task --</option>
                                        <?php $__currentLoopData = $plannings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->id); ?>" data-mop="<?php echo e($item->mop); ?>">
                                                <?php echo e($item->task_name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="start_date" class="form-label">Date</label>
                                    <select id="date-dropdown" name="start_date" class="form-select date-dropdown">
                                        <option value="">-- Select Started Date --</option>
                                        <?php $__currentLoopData = $plannings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($item->start_date); ?>">
                                                <?php echo e($item->start_date); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="activities" class="form-label">Activities</label>
                                    <input type="text" class="form-control" name="activities"
                                        placeholder="Enter Task">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4"></div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="results" class="form-label">Results</label>
                                    <input type="text" class="form-control" name="results"
                                        placeholder="Enter Results">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <label for="img" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="img"
                                onchange="previewImage(event)">
                            <img id="preview-image" src="" alt="Preview image"
                                style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                </div>
            </div>
            <!--end-of-general-task-->
        </form>
        <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/actuals/create.blade.php ENDPATH**/ ?>