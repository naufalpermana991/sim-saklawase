<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Create Planning Task</title>
    <?php echo $__env->yieldPushContent('prepend-style'); ?>
    <?php echo $__env->make('includes.styles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldPushContent('addon-style'); ?>
</head>

<body>
    <?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--section1-->
    <div class="container mb-3">
        <form action="<?php echo e(route('planning.store')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="mt-5">
                <div class="title-section-1 d-flex justify-content-between">
                    <h3>Add Planning Task</h3>
                    <button type="submit" class="btn btn-primary py-2 px-4">
                        <img src="<?php echo e(asset('frontend/images/plus-circle 1.png')); ?>" alt=""
                            class="btn-icon me-3" />
                        Save Planning Task
                    </button>
                </div>
            </div>

            <!--form-->
            <div class="mt-5">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="mb-3">
                            <label for="project_id" class="form-label">Project</label>
                            <select class="form-control" name="project_id">
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($project->id); ?>"><?php echo e($project->project_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="task_name" class="form-label">Main Task</label>
                            <input type="text" class="form-control" name="task_name"
                                placeholder="Enter your main task" />
                        </div>

                        <!--Sub Task Choice-->
                        <div class="my-5" id="app">
                            <div class="d-flex justify-content-between">
                                <label for="choice">Does Your Main Task have a Sub Task?</label>
                                <section>
                                    <input type="radio" v-model="userChoice" value="yes" />
                                    Yes
                                </section>
                                <section>
                                    <input type="radio" v-model="userChoice" value="no" />
                                    No
                                </section>
                            </div>
                            <!--If User Says Yes, Then Input Your Sub Task-->
                            <transition name="form-animation">
                                <div v-if="userChoice == 'yes'" key="yes">
                                    <div class="mt-4"></div>
                                    <label for="sub_task">Sub Task</label>
                                    <input type="text" class="form-control" name="sub_task"
                                        placeholder="Enter Sub Task" v-model="subTaskValue" />
                                    <div class="mt-5"></div>
                                </div>
                            </transition>
                        </div>

                        <!--volume-->
                        <div class="mt-4">
                            <div class="col">
                                <label for="volume" class="form-label">Volume</label>
                                <input type="text" class="form-control" name="volume" placeholder="Enter Volume" />
                            </div>
                        </div>

                        <div class="mt-4" id="app">
                            <enum-form></enum-form>
                        </div>

                        <!--unit-->
                        <div class="mt-4">
                            <div class="col">
                                <label for="unit">Unit</label>
                                <select name="unit" id="unit" v-model="unit">
                                    <option value="m2">m2</option>
                                    <option value="m1">m1</option>
                                    <option value="kg">Kg</option>
                                    <option value="lbr">Lbr</option>
                                    <option value="pcs">Pcs</option>
                                </select>
                            </div>
                        </div>

                        <!-- Date Group Input -->
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <label for="start_date" class="form-label">Date Started</label>
                                    <input type="date" class="form-control" name="start_date" id="start_date"
                                        placeholder="Enter Date Started" />
                                </div>
                                <div class="col-4">
                                    <label for="end_date" class="form-label">Date Finished</label>
                                    <input type="date" class="form-control" name="end_date" id="end_date"
                                        placeholder="Enter Date Finished" />
                                </div>
                                <div class="col-4">
                                    <label for="duration" class="form-label">Duration</label>
                                    <input type="number" class="form-control" name="duration"
                                        placeholder="Enter Duration" id="duration" readonly />
                                </div>
                            </div>
                        </div>

                        <!--Man of Power Planning-Input-->
                        <div class="mt-4">
                            <label for="mop" class="form-label">How Many People (MOP) to Assign to Your
                                Project?</label>
                            <input type="number" class="form-control" name="mop"
                                placeholder="Enter number of people" />
                        </div>

                        <!--Percentage-Input-->
                        <div class="mt-4">
                            <label for="percentage" class="form-label">Percentage Progress</label>
                            <input type="text" class="form-control" name="percentage"
                                placeholder="Enter your project percentage" />
                        </div>
                    </div>
                </div>
            </div>
            <!--end-form-->
        </form>
    </div>

    <?php echo $__env->make('includes.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\laragon\www\sim-saklawase\resources\views/pages/planning/create.blade.php ENDPATH**/ ?>