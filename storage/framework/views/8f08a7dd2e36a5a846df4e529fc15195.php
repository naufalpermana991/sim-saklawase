
<?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                <h5 class="align-self-center">Actual</h5>
                <div class="right-div">
                    <a href="<?php echo e(route('actuals.create', $project->id)); ?>" class="btn btn-outline-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt="" class="btn-icon me-3" />Add
                        Actual
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
                    <th class="align-middle p-3" scope="col">Task Name</th>
                    <th class="text-center align-middle p-3" scope="col">
                        Activities
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Start Date
                    </th>
                    <th class="text-center align-middle p-3" scope="col">
                        Results
                    </th>
                    <th class="text-center align-middle p-3" scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $actuals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td class="p-3 align-middle" scope="row"><?php echo e($data->task_name); ?></td>
                        <td class="text-center align-middle p-3"><?php echo e($data->activities); ?></td>
                        <td class="text-center align-middle p-3"><?php echo e($data->start_date); ?></td>
                        <td class="text-center align-middle p-3"><?php echo e($data->results); ?></td>
                        <td class="text-end
                                    p-3 align-middle">
                            <div class="action d-flex justify-content-center ">
                                <form onsubmit="return confirm('Are you sure to delete the data?');"
                                    action="<?php echo e(route('mop.destroy', $data->id)); ?>" method="POST">
                                    <div class="action d-flex justify-content-center align-middle">
                                        <a class="btn btn-primary " href="<?php echo e(route('mop.edit', $data->id)); ?>">Edit</a>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <td colspan="5"class="text-center p-3 block align-middle">Data Kosong</td>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!--end-table-section-->

    <div class="container mt-5">
        <h5>Actual Timeline</h5>
        <div id="gantt_here" style='width:100%; height:100%;'></div>
        <script type="text/javascript">
            gantt.config.date_format = "%Y-%m-%d %H:%i:%s";

            gantt.config.task_duration_func = function(start_date, task_name) {
                var startDate = moment(start_date);
                var endDate = moment(end_date);
                var duration = endDate.diff(startDate, 'days'); // Adjust this line to match the duration format you need
                return duration;
            };

            gantt.init("gantt_here");
            gantt.load("/actual");
        </script>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/actuals/index.blade.php ENDPATH**/ ?>